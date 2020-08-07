jQuery(document).ready(function () {
    var values = {};
    var report = {};

    $('#toCountConstructionCalculator').on('click', function (event) {
       $('.ui-loader').show();
       $('#toCountConstructionCalculator').attr('disabled', true);
       values = {};
       $.each($('#constructionCalculator').serializeArray(), function(i, field) {
           values[field.name] = field.value;
       });
       values.action = 'constructionCalculator';
       $.ajax(constructionCalculator.ajaxUrl, {
           type: 'POST',
           data: values,
           success: function (data) {
               var dataCalc = JSON.parse(data);
               if (typeof dataCalc === "object") {
                   report = dataCalc;
               }
               $('.ui-loader').hide();
               $('#sendConstructionCalculator').attr('disabled',false);
               $('#toCountConstructionCalculator').attr('disabled',false);
               $('#timelineApartCalc').show();

               console.log(data);
               HighchartsApart(dataCalc);

               $('html, body').animate({
                  scrollTop: $("#timelineApartCalc").offset().top - 125
               }, 1000);

               if ($(window).width() <= 768) {
                 $('.send-btn').show();
               }
           },
       });

    });

    function HighchartsApart(dataCalc) {
      $.each(dataCalc.mainTypeCost,function(index, value){
          $('#'+index+'_data .calc-apart-param__cost-text').html(value+'$');
      });
      $.each(dataCalc.mainTypeCostInactive,function(index, value){
          $('#'+value+'_data .calc-apart-param__cost-text').html('0$');
      });
      $.each(dataCalc.mainTypeDays,function(index, value){
          $('#'+index+'_data .calc-apart__current-days').val(value);
          $('#'+index+'_data .calc-apart__number-save-days').val(value/100);
      });
      $.each(dataCalc.shiftDaysParallelJobs,function(index, value){
          $('#'+index+'_data .calc-apart__days-shift').val(parseInt(value));
      });
      $('#sumProcceses').html(dataCalc.mainTypeSum);
      $('#sumOptions').html(dataCalc.additionalOptionSum);
      $('#sumTotal').html(dataCalc.totalCost);
      $('#sumMonths').html(dataCalc.totalDays['months']);
      $('#sumDays').html(dataCalc.totalDays['days']);

      var $headerTimeLine = [],
          $bodyTimeLine = [],
          colorChartsLine = '',
          inputQualityVal = $('.calc-apart__quality-level[name=calc-apart__quality-level] option:checked').val();

      var $index = 0;
      $('.calc-apart-param').each(function (index, element) {

        if ($(element).find('.calc-apart-param__cost-text').html() != '0$'){
          colorChartsLine =  '#F47955';
        } else{
          colorChartsLine = '#F1F1F1';
        }
        if (!(inputQualityVal == 1 && $(element).hasClass('only-capital'))) {
          var $cuyrrentDays = parseFloat($(element).find('.calc-apart__current-days').val()),
              $cuyrrentName = $(element).find('.calc-apart__name').val(),
              $shiftDays = parseFloat($(element).find('.calc-apart__days-shift').val());
          $cuyrrentDays = Math.round($cuyrrentDays);
            $bodyTimeLine.push({low: $cuyrrentDays+$shiftDays, high: $shiftDays, count: $cuyrrentDays, color: colorChartsLine});
            $headerTimeLine.push([$cuyrrentName + ', ' + $(element).find('.calc-apart-param__cost-text').text()]);
        }

        if ($('.calc-apart__quality-level[name="calc-apart__quality-level"] option:checked').val() == 1){
          $('.calc-apart-param__list').addClass('hide-only-capital');
        } else{
          $('.calc-apart-param__list').removeClass('hide-only-capital');
        }

        $index ++;
        if ($index >= 16)
          return false;
      });

      var $chartsTotalPrice = 0,
          $chartsRadioQualityVal = $('.calc-apart__quality-level[name="calc-apart__quality-level"] option:checked').val(),
          $chartsRadioClassVal = $('.calc-apart__class-level[name="calc-apart__class-level"]:checked').val();

      $chartsRadioQualityVal = 1; $chartsRadioClassVal = 1;
      if ($chartsRadioQualityVal == 1 && $chartsRadioClassVal == 1) {
        $chartsTotalPrice = $('.calc-apart__total-cost-kos-eco').val();
      } else if ($chartsRadioQualityVal == 1 && $chartsRadioClassVal == 2){
        $chartsTotalPrice = $('.calc-apart__total-cost-kos-middle').val();
      } else if ($chartsRadioQualityVal == 2 && $chartsRadioClassVal == 1) {
        $chartsTotalPrice = $('.calc-apart__total-cost-middle').val();
      } else if ($chartsRadioQualityVal == 2 && $chartsRadioClassVal == 2) {
        $chartsTotalPrice = $('.calc-apart__total-cost-eco').val();
      } else if ($chartsRadioQualityVal == 2 && $chartsRadioClassVal == 3) {
        $chartsTotalPrice = $('.calc-apart__total-cost-premium').val();
      }

      var widthChartInfo = 0;

      if ($(window).width() >= '767'){
        widthChartInfo = 250;
      } else {
        widthChartInfo = 0;
      }

      Highcharts.chart('timelineApartCalc', {

        exporting:{
          buttons: {
              contextButton: {
                  menuItems: ['downloadPNG', "downloadJPEG", "downloadPDF", "downloadSVG"]
              }
          }
        },

        chart: {
            type: 'columnrange',
            inverted: true
        },

        title: {
            text: 'План работ и сроки реализации Вашего проекта по этапам',
            align: 'left',
            // margin: 41,
            useHTML: true,
            style: {
              "font-size": "18px",
              "font-family": "SF UI Text Bold"
            }
        },

        // subtitle: {
        //     text: 'Сроки реализации проекта по этапам'
        // },

        xAxis: {
            categories: $headerTimeLine,
            className: 'graph-label-item-xAxis',
            tickInterval: 1,
            tickWidth: 1,
            labels: {
              padding: 15,
              distance: 115,
              x: -50,
              style: {
                  width: widthChartInfo + 'px',
                  'min-width': widthChartInfo +'px',
                  'max-width': widthChartInfo +'px',
              },
              useHTML : true
            },
            title: {
              offset: 5
            },
        },

        yAxis: {
            title: {
                // text: 'Общее количество дней: ' + $('.calc-apart__total-days').val() + ', cтоимость: ' + $chartsTotalPrice + '$'
                text: ''
            },
            min: 0,

        },

        plotOptions: {
            columnrange: {
              dataLabels: {
                  enabled: true,
                  inside: false,
                  format: '{point.count} дней',
                  className: 'graph-label-item',
                  yLow: 23009348023984,
              }
            }
        },

        legend: {
            enabled: false
        },

        tooltip: {
            valueSuffix: '{}',
            pointFormat: '<span style="color:{point.color}">\u25CF</span> {series.name}: <b>{point.count}</b><br/>',
        },

        series: [{
            name: 'Дней',
            data:  $bodyTimeLine
        }]

      });
      $('.calc-apart-param').height($('.highcharts-axis.highcharts-xaxis.graph-label-item-xAxis .highcharts-tick:nth-child(2)').offset().top - $('.highcharts-axis.highcharts-xaxis.graph-label-item-xAxis .highcharts-tick:first-child').offset().top);
      $.each($('.highcharts-data-labels.highcharts-series-0.highcharts-columnrange-series.highcharts-color-0.highcharts-tracker g') ,function(index, value){
        if (index >= 16)
          $(this).hide();
        if (index == 15) {
          $(this).removeClass('highcharts-data-label-hidden').css('opacity', '1');
        }
        // console.log(index+" "+value);
      });
    }

   $('#sendConstructionCalculator').on('click', function (event) {
       report.email = $('#saveCCEmail').val();
       report.action = 'constructionCalculatorSave';
       if (!report.email)
         return;
       $('.ui-loader').show();
       $('#sendConstructionCalculator').attr('disabled', true);

       $.ajax(constructionCalculator.ajaxUrl, {
           type: 'POST',
           data: report,
           success: function (data) {
               if (data === 'ok') {
                   alert('Отчет создан!');
               } else {
                   alert('Произошла внутренняя ошибка, попробуйте позже');
               }
               $('.ui-loader').hide();
               $('#sendConstructionCalculator').attr('disabled',false);
           },
       });
   });
});