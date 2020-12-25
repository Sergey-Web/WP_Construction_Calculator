(function($) {
  $(document).ready(function() {

    if ($("div").is(".calc-apart")){

      function round(value) {
        return Number(Math.round(value+'e'+1)+'e-'+1);
      }
      /* calc mounth - day - hour --========================================*/
      function daysToString(days){
         var value = parseFloat(days) * 24 * 60;
         var units = {
            // "год": 24*60*365,
            "мес": 24*60*30,
            // "неделя": 24*60*7,
            "д": 24*60,
            "ч": 1*60
        }
        var result = [];
        for(var name in units) {
          var p =  Math.floor(value/units[name]);
          if(p == 1) result.push(p + " " + name);
          if(p >= 2) result.push(p + " " + name + "");
          value %= units[name];
        }
         return result;
      }
      /* calc mounth - day - hour --========================================*/


      /* input range  --========================================*/
      var elem_square = document.getElementById('apart_square');
      var init = new Powerange(elem_square, {callback: displayValue, min: 30, max: 500, start: 83, step: 1 });

      jQuery('#apart_square').next().find('.range-handle').append('<div id="apart_square_count" class="calc__range-count"><span></span>кв. м.</div>');
      jQuery('#apart_square_count span').text(elem_square.value);
      function displayValue() {
        jQuery('#apart_square_count span').text(elem_square.value);
      }
      var elem_floor = document.getElementById('apart_number_of_rooms');
      var init = new Powerange(elem_floor, {callback: displayValueFloor, min: 1, max: 12, start: 3, step: 1 });

      jQuery('#apart_number_of_rooms').next().find('.range-handle').append('<div id="apart_number_of_rooms_count" class="calc__range-count"><span></span> <p class="calc__range-count-many">комнаты</p><p class="calc__range-count-one">комната</p></div>');
      jQuery('#apart_number_of_rooms_count span').text(elem_floor.value);
      check_count_floor();
      function displayValueFloor() {
        jQuery('#apart_number_of_rooms_count span').text(elem_floor.value);
        check_count_floor();
      }
      function check_count_floor() {
        if (jQuery('#apart_number_of_rooms').val() > 1){
          jQuery('.calc__range-count-many').show(0);
          jQuery('.calc__range-count-one').hide(0);
        } else {
          jQuery('.calc__range-count-many').hide(0);
          jQuery('.calc__range-count-one').show(0);
        }
      }
      /* input range  --========================================*/

      function calc_apart_coeff_days(){
        $('.calc-apart-param.calc-apart-param__coeff').each( function(index, element) {
          var $result;
          if ($(element).hasClass('has-user-input')){
            var $userInputName = $(element).data('calc-apart-input'),
                $userInputVal = parseFloat($('#apart_' + $userInputName).val());
            if ($userInputName == 'number_of_rooms') {
              $userInputVal += 1;
            }
            $result = $(element).find('.calc-apart__number-coeff-days').val() * $userInputVal;
          } else {
            $result = $(element).find('.calc-apart__number-coeff-days').val() * $('#apart_square').val();
          }

          $(element).find('.calc-apart__current-days').val(round($result));
        });
      }
      calc_apart_coeff_days();

      function calc_apart_fix_cost() {
        $('.calc-apart-param__fix-cost').each(function (index, element) {
          var $calcApartClassLevel = $('.calc-apart__class-level:checked').val(),
              $calcApartCostText = $(element).find('.calc-apart-param__cost-text');
          if ($calcApartClassLevel == 1) {
            $calcApartCostText.text($(element).find('.calc-apart__number').val() + '$');
          } else if ($calcApartClassLevel == 2) {
            $calcApartCostText.text($(element).find('.calc-apart__number1').val() + '$');
          } else if ($calcApartClassLevel == 3) {
            $calcApartCostText.text($(element).find('.calc-apart__number2').val() + '$');
          }
        });
      }
      calc_apart_fix_cost();

      function calc_apart_cost() {
        var $resultEco = 0,
            $resultMiddle = 0,
            $resultPremium = 0,
            $resultKosEco = 0,
            $resultKosMiddle = 0,
            $currentResultEco,
            $currentResultMiddle,
            $currentResultPremium,
            $currentResultKosEco,
            $currentResultKosMiddle;
        $('.calc-apart-param.calc-apart-param__coeff').each( function(index, element) {
          var currentCostElementEco = $(element).find('.calc-apart__number').val(),
              currentCostElementMiddle = $(element).find('.calc-apart__number1').val(),
              currentCostElementPremium = $(element).find('.calc-apart__number2').val();
          if ($(element).find('.calc-apart-param__checkbox').is(':checked')){
            if ($(element).hasClass('has-user-input')){
              var $userInputName = $(element).data('calc-apart-input'),
                  $userInputVal = parseFloat($('#apart_' + $userInputName).val());
              if ($userInputName == 'number_of_rooms') {
                $userInputVal += 1;
              }

              if (!$(element).hasClass('only-capital')) {
                $currentResultKosEco = parseFloat(currentCostElementEco) * $userInputVal;
                $currentResultKosMiddle = parseFloat(currentCostElementMiddle) * $userInputVal;
                $resultKosEco += $currentResultKosEco;
                $resultKosMiddle += $currentResultKosMiddle;
              }

              $currentResultEco = parseFloat(currentCostElementEco) * $userInputVal;
              $currentResultMiddle = parseFloat(currentCostElementMiddle) * $userInputVal;
              $currentResultPremium = parseFloat(currentCostElementPremium) * $userInputVal;
              $resultEco += $currentResultEco;
              $resultMiddle += $currentResultMiddle;
              $resultPremium += $currentResultPremium;

              var $calcApartClassLevel = $('.calc-apart__class-level:checked').val(),
                  $calcApartCostText = $(element).find('.calc-apart-param__cost-text');
              if ($calcApartClassLevel == 1) {
                $calcApartCostText.text($currentResultEco + '$');
              } else if ($calcApartClassLevel == 2) {
                $calcApartCostText.text($currentResultMiddle + '$');
              } else if ($calcApartClassLevel == 3) {
                $calcApartCostText.text($currentResultPremium + '$');
              }

            } else {
              var $apartSquare = parseFloat($('#apart_square').val());
              $currentResultEco = parseFloat(currentCostElementEco) * $apartSquare;
              $currentResultMiddle = parseFloat(currentCostElementMiddle) * $apartSquare;
              $currentResultPremium = parseFloat(currentCostElementPremium) * $apartSquare;
              $resultEco += $currentResultEco;
              $resultMiddle += $currentResultMiddle;
              $resultPremium += $currentResultPremium;

              if (!$(element).hasClass('only-capital')) {
                $currentResultKosEco = parseFloat(currentCostElementEco) * $apartSquare;
                $currentResultKosMiddle = parseFloat(currentCostElementMiddle) * $apartSquare;
                $resultKosEco += $currentResultKosEco;
                $resultKosMiddle += $currentResultKosMiddle;
              }

              var $calcApartClassLevel = $('.calc-apart__class-level:checked').val(),
                  $calcApartCostText = $(element).find('.calc-apart-param__cost-text');
              if ($calcApartClassLevel == 1) {
                $calcApartCostText.text($currentResultEco + '$');
              } else if ($calcApartClassLevel == 2) {
                $calcApartCostText.text($currentResultMiddle + '$');
              } else if ($calcApartClassLevel == 3) {
                $calcApartCostText.text($currentResultPremium + '$');
              }
            }
          }
        });

        $('.calc-apart-param.calc-apart-param__fix-cost').each( function(index, element) {
          if ($(element).find('.calc-apart-param__checkbox').is(':checked')){
            $resultEco += parseFloat($(element).find('.calc-apart__number').val());
            $resultMiddle += parseFloat($(element).find('.calc-apart__number1').val());
            $resultPremium += parseFloat($(element).find('.calc-apart__number2').val());

            if (!$(element).hasClass('only-capital')) {
              $currentResultKosEco = parseFloat($(element).find('.calc-apart__number').val());
              $currentResultKosMiddle = parseFloat($(element).find('.calc-apart__number1').val());
              $resultKosEco += $currentResultKosEco;
              $resultKosMiddle += $currentResultKosMiddle;
            }

          }
        });

        /* calc options price --========================================*/
        var $calc_apart_options_sum = 0;
        $('.calc-option-list__item').each(function(index, element) {
          if ($(element).find('.calc-apart-checkbox-plus').is(':checked')){
            $calc_apart_options_sum += parseFloat($(element).find('.calc-apart-checkbox-plus:checked').val());
          }
        });
        /* calc options price --========================================*/

        $('.calc-apart__total-cost-eco').val((round($resultEco) + round($calc_apart_options_sum)));
        $('.calc-apart__cost-eco span').text(round($resultEco) + round($calc_apart_options_sum));
        $('.calc-apart__total-cost-middle').val(round($resultMiddle) + round($calc_apart_options_sum));
        $('.calc-apart__cost-middle span').text(round($resultMiddle) + round($calc_apart_options_sum));
        $('.calc-apart__total-cost-premium').val(round($resultPremium) + round($calc_apart_options_sum));
        $('.calc-apart__cost-premium span').text(round($resultPremium) + round($calc_apart_options_sum));

        $('.calc-apart__total-cost-kos-eco').val(round($resultKosEco) + round($calc_apart_options_sum));
        $('.calc-apart__cost-kos-eco span').text(round($resultKosEco) + round($calc_apart_options_sum));
        $('.calc-apart__total-cost-kos-middle').val(round($resultKosMiddle) + round($calc_apart_options_sum));
        $('.calc-apart__cost-kos-middle span').text(round($resultKosMiddle) + round($calc_apart_options_sum));

        $('.section-price span').each(function(index, element) {
          $(element).text($(element).text().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 '));
        });
      }
      calc_apart_cost();







      function calc_apart_all_days() {
        var $result = 0,
            $inputQualityVal = $('.calc-apart__quality-level[name=calc-apart__quality-level] option:checked').val();
        $('.calc-apart-param').each( function(index, element) {
          if ($(element).find('.calc-apart-param__checkbox').is(':checked')){
            if (($inputQualityVal == 1 && !$(element).hasClass('only-capital')) || ($inputQualityVal == 2)) {
              if ($('.calc-param__list').hasClass('hide-only-capital')){
                if ($('.calc-param').hasClass('only-capital')){
                  $result += parseFloat($(element).find('.calc-apart__current-days').val());
                }
              } else {
                $result += parseFloat($(element).find('.calc-apart__current-days').val());
              }
            }
          }
        });
        $('.calc-apart__days-without').val(round($result));
      }
      calc_apart_all_days();

      function calc_apart_save_days() {

        $('.calc-apart-param').each(function (index, element) {
          if ($(element).find('.calc-apart-param__checkbox').is(':checked') && !$(element).hasClass('only-capital')){
            var $currentDays = parseFloat($(element).find('.calc-apart__current-days').val()),
                $currentShift = parseFloat($(element).find('.calc-apart__days-shift').val()),
                $result = 0;

            if ($currentShift == 0) {
              $(element).find('.calc-apart__number-save-days').val(0);
            } else {
              $result = (100 - $currentShift ) * $currentDays / 100;
              $(element).find('.calc-apart__number-save-days').val($result);
            }
          }
        });

        var $sumDeys = 0,
            $set = $('.calc-apart-param:not(.only-capital) .calc-apart-param__checkbox:checked'),
            $length = $set.length;

        $set.each(function (index, element) {
          if (index !== (parseFloat($length) - 1)) {
            $sumDeys += parseFloat($(element).closest('.calc-apart-param').find('.calc-apart__number-save-days').val());
          }
        });

        var $calc_apart_save_days_result = round(parseFloat($('.calc-apart__days-without').val()) - $sumDeys);

        $('.section-time').text(daysToString($calc_apart_save_days_result).join(' '));
        $('.calc-apart__total-days').val($calc_apart_save_days_result);
      }
      calc_apart_save_days();



      $('.calc-apart-param__checkbox, .calc-apart__user-input, .calc-checkbox-plus').on('change', function () {
        calc_apart_coeff_days();
        calc_apart_fix_cost();
        calc_apart_cost();
        calc_apart_all_days();
        calc_apart_save_days();
        HighchartsApart();
      });

      $('.calc-apart__quality-level').on('change', function () {
        if ($('.calc-apart__quality-level[name="calc-apart__quality-level"] option:checked').val() == 1){

          $('.calc-apart-param__list').addClass('hide-only-capital');
          $('.calc-apart__class-level[value=3] + label').addClass('hidden');
          $('.calc-apart__class-level[value=1]').click();
        } else{
          $('.calc-apart-param__list').removeClass('hide-only-capital');
          $('.calc-apart__class-level[value=3] + label').removeClass('hidden');
        }

        $('.result-inner-only-capital').toggleClass('hidden');
        $('.result-inner-only-kos').toggleClass('hidden');
        calc_apart_coeff_days();
        calc_apart_fix_cost();
        calc_apart_cost();
        calc_apart_all_days();
        calc_apart_save_days();
        HighchartsApart();
      });

      $('.calc-apart__class-level').on('change', function () {
        var $calcApartClassLevel = $('.calc-apart__class-level:checked').val();
        // if ($calcApartClassLevel == 3) {
        //   $('.calc-apart__quality-level').each( function (index, element) {
        //     if ($(element).val() == 1) {
        //       $(element).attr('disabled', 'disabled');
        //     }
        //     if ($(element).val() == 2) {
        //       $(element).attr('checked', true);
        //     }
        //   });
        // } else {
        //   $('.calc-apart__quality-level').each( function (index, element) {
        //     if ($(element).val() == 1) {
        //       $(element).attr('disabled', false);
        //     }
        //   });
        // }
        calc_apart_coeff_days();
        calc_apart_fix_cost();
        calc_apart_cost();
        calc_apart_all_days();
        calc_apart_save_days();
        HighchartsApart();
      });

      $(window).resize(function() {
        HighchartsApart();
      });


      function HighchartsApart() {
        var $headerTimeLine = [],
            $bodyTimeLine = [],
            $startTime = 0,
            $endTime = 0,
            timeLineId = 0,
            colorChartsLine = '',
            $inputQualityVal = $('.calc-apart__quality-level[name=calc-apart__quality-level] option:checked').val();
        $('.calc-apart-param').each(function (index, element) {

          if ($(element).find('.calc-apart-param__checkbox').is(':checked')){
            colorChartsLine =  '#F47955';
          } else{
            colorChartsLine = '#F1F1F1';
          }


          if (!($inputQualityVal == 1 && $(element).hasClass('only-capital'))) {
            var $cuyrrentDays = parseFloat($(element).find('.calc-apart__current-days').val()),
                $cuyrrentName = $(element).find('.calc-apart__name').val(),
                $saveDays = parseFloat($(element).find('.calc-apart__number-save-days').val());

            $endTime = $endTime + $cuyrrentDays;
            $bodyTimeLine.push({low: $startTime, high: $endTime, count: $cuyrrentDays, color: colorChartsLine});
            $endTime = $endTime - $saveDays;
            $startTime = $endTime;
            $headerTimeLine.push([$cuyrrentName + ', ' + $(element).find('.calc-apart-param__cost-text').text()]);
          }

          if ($('.calc-apart__quality-level[name="calc-apart__quality-level"] option:checked').val() == 1){
            $('.calc-apart-param__list').addClass('hide-only-capital');
          } else{
            $('.calc-apart-param__list').removeClass('hide-only-capital');
          }


        });

        var $chartsTotalPrice = 0,
            $chartsRadioQualityVal = $('.calc-apart__quality-level[name="calc-apart__quality-level"] option:checked').val(),
            $chartsRadioClassVal = $('.calc-apart__class-level[name="calc-apart__class-level"]:checked').val();

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
                  text: 'Общее количество дней: ' + $('.calc-apart__total-days').val() + ', cтоимость: ' + $chartsTotalPrice + '$'
              },
              min: 0,

          },

          plotOptions: {
              columnrange: {
                dataLabels: {
                    enabled: true,
                    inside: false,
                    format: '{point.count} д.',
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
      }
      HighchartsApart();


    }

  });
})(jQuery);
