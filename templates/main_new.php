
<form action="constructionCalculator" id="constructionCalculator">

    <div class="row">

      <div class="col-md-12">

          <div class="row sliders-wrap">
            <div class="col-md-4">
              
              <div data-role="rangeslider">
                  <label for="areaScroll">Площадь, кв.м:</label>
                  <input type="range" name="area" id="areaScroll" min="30" max="500">
              </div>

            </div>
            <div class="col-md-4">
              
              <div data-role="rangeslider">
                  <label for="numberRooms">Количество комнат:</label>
                  <input type="range" name="numberRooms" id="numberRooms" min="1" max="12">
              </div>

            </div>
            <div class="col-md-4">
              
              <div data-role="rangeslider">
                  <label for="numberBathrooms">Количество санузлов</label>
                  <input type="range" name="numberBathrooms" id="numberBathrooms" min="1" max="10">
              </div>

            </div>
          </div>

          <br><br>

      </div>


      <div class="col-md-12 main-params-wrap" style="position: relative;padding: 0;background: #fff;min-height: 570px;">

          <div style="position: absolute;top: 103px;width: 540px;z-index: 5;padding-left: 15px;">

              <div class="form-group">

                    <div class="item-wrap">
                          <div>
                             <h5>Умный дом</h5>
                          </div>
                          <div>

                                <div class="form-check" data-toggle="tooltip" title="Эта опция лучше, чем предыдущая, и вот почему...">
                                    <input class="form-check-input" type="radio" name="smartHouse" id="smartHouse1" value="1">
                                    <label class="form-check-label" for="smartHouse1">
                                        Эконом
                                    </label>
                                </div>
                                <div class="form-check" data-toggle="tooltip" title="Эта опция лучше, чем предыдущая, и вот почему...">
                                    <input class="form-check-input" type="radio" name="smartHouse" id="smartHouse2" value="2">
                                    <label class="form-check-label" for="smartHouse2">
                                        Средний
                                    </label>
                                </div>
                                <div class="form-check" data-toggle="tooltip" title="Эта опция лучше, чем предыдущая, и вот почему...">
                                    <input class="form-check-input" type="radio" name="smartHouse" id="smartHouse3" value="3">
                                    <label class="form-check-label" for="smartHouse3">
                                        Премиум
                                    </label>
                                </div>

                            </div>

                    </div>
                    
                    <div class="item-wrap">
                          <div>
                             <h5>Система водоподготовки (фильтр)</h5>
                          </div>
                          <div>

                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="waterTreatmentSystem" id="waterTreatmentSystem1" value="1">
                                  <label class="form-check-label" for="waterTreatmentSystem1">
                                      Эконом
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="waterTreatmentSystem" id="waterTreatmentSystem2" value="2">
                                  <label class="form-check-label" for="waterTreatmentSystem2">
                                      Средний
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="waterTreatmentSystem" id="waterTreatmentSystem3" value="3">
                                  <label class="form-check-label" for="waterTreatmentSystem3">
                                      Премиум
                                  </label>
                              </div>

                          </div>

                    </div>
                    
                    <div class="item-wrap">
                          <div>
                             <h5>Система питьевой воды</h5>
                          </div>
                          <div>

                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="drinkingWaterSystem" id="drinkingWaterSystem1" value="1">
                                  <label class="form-check-label" for="drinkingWaterSystem1">
                                      Эконом
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="drinkingWaterSystem" id="drinkingWaterSystem2" value="2">
                                  <label class="form-check-label" for="drinkingWaterSystem2">
                                      Средний
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="drinkingWaterSystem" id="drinkingWaterSystem3" value="3">
                                  <label class="form-check-label" for="drinkingWaterSystem3">
                                      Премиум
                                  </label>
                              </div>

                          </div>

                    </div>

                    <div class="item-wrap">
                          <div>
                             <h5>Атизатопление</h5>
                          </div>
                          <div>

                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="antiFlooding" id="antiFlooding1" value="1">
                                  <label class="form-check-label" for="antiFlooding1">
                                      Эконом
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="antiFlooding" id="antiFlooding2" value="2">
                                  <label class="form-check-label" for="antiFlooding2">
                                      Средний
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="antiFlooding" id="antiFlooding3" value="3">
                                  <label class="form-check-label" for="antiFlooding3">
                                      Премиум
                                  </label>
                              </div>

                          </div>
                              
                    </div>

                    <div class="item-wrap">
                          <div>
                             <h5>Приточно-вытяжная система</h5>
                          </div>
                          <div>

                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="supplyExhaustSystem" id="supplyExhaustSystem1" value="1">
                                  <label class="form-check-label" for="supplyExhaustSystem1">
                                      Эконом
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="supplyExhaustSystem" id="supplyExhaustSystem2" value="2">
                                  <label class="form-check-label" for="supplyExhaustSystem2">
                                      Средний
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="supplyExhaustSystem" id="supplyExhaustSystem3" value="3">
                                  <label class="form-check-label" for="supplyExhaustSystem3">
                                      Премиум
                                  </label>
                              </div>

                          </div>
                              
                    </div>

                    <div class="item-wrap">
                          <div>
                             <h5>Замена входной двери</h5>
                          </div>
                          <div>

                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="doorReplacement" id="doorReplacement1" value="1">
                                  <label class="form-check-label" for="doorReplacement1">
                                      Эконом
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="doorReplacement" id="doorReplacement2" value="2">
                                  <label class="form-check-label" for="doorReplacement2">
                                      Средний
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="doorReplacement" id="doorReplacement3" value="3">
                                  <label class="form-check-label" for="doorReplacement3">
                                      Премиум
                                  </label>
                              </div>

                          </div>
                              
                    </div>

                    <div class="item-wrap">
                          <div>
                             <h5>Теплый пол</h5>
                          </div>
                          <div>

                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="warmFloor" id="warmFloor1" value="1">
                                  <label class="form-check-label" for="warmFloor1">
                                      Эконом
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="warmFloor" id="warmFloor2" value="2">
                                  <label class="form-check-label" for="warmFloor2">
                                      Средний
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="warmFloor" id="warmFloor3" value="3">
                                  <label class="form-check-label" for="warmFloor3">
                                      Премиум
                                  </label>
                              </div>

                          </div>
                              
                    </div>

                    <div class="item-wrap">
                          <div>
                             <h5>Биокамин</h5>
                          </div>
                          <div>

                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="bioFireplace" id="bioFireplace1" value="1">
                                  <label class="form-check-label" for="bioFireplace1">
                                      Эконом
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="bioFireplace" id="bioFireplace2" value="2">
                                  <label class="form-check-label" for="bioFireplace2">
                                      Средний
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="bioFireplace" id="bioFireplace3" value="3">
                                  <label class="form-check-label" for="bioFireplace3">
                                      Премиум
                                  </label>
                              </div>

                          </div>
                              
                    </div>

                    <div class="item-wrap">
                          <div>
                             <h5>Бойлер</h5>
                          </div>
                          <div>

                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="boiler" id="boiler1" value="1">
                                  <label class="form-check-label" for="boiler1">
                                      Эконом
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="boiler" id="boiler2" value="2">
                                  <label class="form-check-label" for="boiler2">
                                      Средний
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="boiler" id="boiler3" value="3">
                                  <label class="form-check-label" for="boiler3">
                                      Премиум
                                  </label>
                              </div>

                          </div>
                              
                    </div>

                    <div class="item-wrap">
                          <div>
                             <h5>Шторы</h5>
                          </div>
                          <div>

                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="curtains" id="curtains1" value="1">
                                  <label class="form-check-label" for="curtains1">
                                      Эконом
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="curtains" id="curtains2" value="2">
                                  <label class="form-check-label" for="curtains2">
                                      Средний
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="curtains" id="curtains3" value="3">
                                  <label class="form-check-label" for="curtains3">
                                      Премиум
                                  </label>
                              </div>

                          </div>
                              
                    </div>

              </div>

          </div>
        
          <div class="" style=" overflow: hidden;position: relative; z-index: 0;">

            <div style="position: relative; left: 130px;">
              <div id="timelineApartCalc" style="min-width: 310px; max-width: 850px; height: 550px; margin: 0 auto 0px;">
                  <div id="test" style="
                      position: absolute;
                      z-index: 9;
                      width: 100%;
                      height: 100%;
                      padding: 200px 0 0 400px;
                      font-size: 22px;
                      color: #333333;
                      /* -webkit-text-stroke: 0.00001px white; */
                  ">Выберите параметры и<br>нажмите "Рассчитать"</div>
                  <style>
                    .highcharts-root {
                      filter: blur(5px);-webkit-filter: blur(5px);
                    }
                    .highcharts-title {
                      filter: blur(0);-webkit-filter: blur(0);
                    }
                  </style>
                  <div id="highcharts-g130u02-0" dir="ltr" class="highcharts-container " style="position: relative; overflow: hidden; width: 850px; height: 550px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg version="1.1" class="highcharts-root" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="850" height="550" viewBox="0 0 850 550"><desc>Created with Highcharts 8.1.0</desc><defs><clipPath id="highcharts-g130u02-1-"><rect x="0" y="0" width="398" height="530" fill="none"></rect></clipPath></defs><rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="850" height="550" rx="0" ry="0"></rect><rect fill="none" class="highcharts-plot-background" x="310" y="96" width="530" height="398"></rect><g class="highcharts-pane-group" data-z-index="0"></g><g class="highcharts-grid highcharts-xaxis-grid graph-label-item-xAxis" data-z-index="1"><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 310 136.5 L 840 136.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 310 176.5 L 840 176.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 310 215.5 L 840 215.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 310 255.5 L 840 255.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 310 295.5 L 840 295.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 310 335.5 L 840 335.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 310 375.5 L 840 375.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 310 414.5 L 840 414.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 310 454.5 L 840 454.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 310 494.5 L 840 494.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 310 96.5 L 840 96.5" opacity="1"></path></g><g class="highcharts-grid highcharts-yaxis-grid" data-z-index="1"><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 309.5 96 L 309.5 494" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 357.5 96 L 357.5 494" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 405.5 96 L 405.5 494" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 454.5 96 L 454.5 494" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 502.5 96 L 502.5 494" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 550.5 96 L 550.5 494" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 598.5 96 L 598.5 494" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 646.5 96 L 646.5 494" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 694.5 96 L 694.5 494" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 743.5 96 L 743.5 494" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 791.5 96 L 791.5 494" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 840.5 96 L 840.5 494" opacity="1"></path></g><rect fill="none" class="highcharts-plot-border" data-z-index="1" x="310" y="96" width="530" height="398"></rect><g class="highcharts-axis highcharts-xaxis graph-label-item-xAxis" data-z-index="2"><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 310 136.5 L 300 136.5" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 310 176.5 L 300 176.5" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 310 215.5 L 300 215.5" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 310 255.5 L 300 255.5" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 310 295.5 L 300 295.5" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 310 335.5 L 300 335.5" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 310 375.5 L 300 375.5" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 310 414.5 L 300 414.5" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 310 454.5 L 300 454.5" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 310 494.5 L 300 494.5" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 310 95.5 L 300 95.5" opacity="1"></path><path fill="none" class="highcharts-axis-line" stroke="#ccd6eb" stroke-width="1" data-z-index="7" d="M 309.5 96 L 309.5 494"></path></g><g class="highcharts-axis highcharts-yaxis" data-z-index="2"><text x="575" data-z-index="7" text-anchor="middle" transform="translate(0,0)" class="highcharts-axis-title" style="color:#666666;fill:#666666;" y="532.34375"><tspan>Общее количество дней: 382.8, cтоимость: 87755$</tspan></text><path fill="none" class="highcharts-axis-line" data-z-index="7" d="M 310 494 L 840 494"></path></g><g class="highcharts-series-group" data-z-index="3"><g data-z-index="0.1" class="highcharts-series highcharts-series-0 highcharts-columnrange-series highcharts-color-0 highcharts-tracker" transform="translate(840,494) rotate(90) scale(-1,1) scale(1 1)" clip-path="url(http://test-server.com.ua/calculator/#highcharts-g130u02-1-)"><rect x="368.5" y="442.3090909090909" width="20" height="87.69090909090909" fill="#F1F1F1" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="328.5" y="424.7709090909091" width="20" height="35.07636363636368" fill="rgb(244,121,85)" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="288.5" y="372.15636363636366" width="20" height="52.61454545454541" fill="#F47955" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="248.5" y="354.6181818181818" width="20" height="17.53818181818184" fill="#F47955" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="208.5" y="302.00363636363636" width="20" height="52.614545454545464" fill="#F1F1F1" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="169.5" y="196.7745454545455" width="20" height="105.22909090909087" fill="rgb(241,241,241)" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="129.5" y="91.54545454545462" width="20" height="105.22909090909087" fill="#F1F1F1" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="89.5" y="91.35272727272735" width="20" height="0.19272727272726797" fill="#F1F1F1" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="49.5" y="65.04545454545462" width="20" height="26.307272727272732" fill="#F1F1F1" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="9.5" y="57.33636363636367" width="20" height="7.709090909090946" fill="#F1F1F1" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect></g><g data-z-index="0.1" class="highcharts-markers highcharts-series-0 highcharts-columnrange-series highcharts-color-0" transform="translate(840,494) rotate(90) scale(-1,1) scale(1 1)" clip-path="none"></g></g><g class="highcharts-exporting-group" data-z-index="3"><g class="highcharts-button highcharts-contextbutton" stroke-linecap="round" transform="translate(816,10)"><rect fill="#ffffff" class="highcharts-button-box" x="0.5" y="0.5" width="24" height="22" rx="2" ry="2" stroke="none" stroke-width="1"></rect><title>Chart context menu</title><path fill="#666666" d="M 6 6.5 L 20 6.5 M 6 11.5 L 20 11.5 M 6 16.5 L 20 16.5" class="highcharts-button-symbol" data-z-index="1" stroke="#666666" stroke-width="3"></path><text x="0" data-z-index="1" style="color:#333333;cursor:pointer;font-weight:normal;fill:#333333;" y="12"></text></g></g><text x="425" text-anchor="middle" class="highcharts-subtitle" data-z-index="4" style="color:#666666;fill:#666666;" y="95"></text><text x="10" text-anchor="start" class="highcharts-caption" data-z-index="4" style="color:#666666;fill:#666666;" y="547"></text><g data-z-index="6" class="highcharts-data-labels highcharts-series-0 highcharts-columnrange-series highcharts-color-0 highcharts-tracker" transform="translate(310,96) scale(1 1)" opacity="1"><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(88,8)"><text x="5" data-z-index="1" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round" style="">91 д.</tspan><tspan x="5" y="16">91 д.</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(105,48)"><text x="5" data-z-index="1" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round" style="">36.4 д.</tspan><tspan x="5" y="16">36.4 д.</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(158,88)"><text x="5" data-z-index="1" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">54.6 д.</tspan><tspan x="5" y="16">54.6 д.</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(175,128)"><text x="5" data-z-index="1" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">18.2 д.</tspan><tspan x="5" y="16">18.2 д.</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(228,168)"><text x="5" data-z-index="1" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">54.6 д.</tspan><tspan x="5" y="16">54.6 д.</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(333,207)"><text x="5" data-z-index="1" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round" style="">109.2 д.</tspan><tspan x="5" y="16">109.2 д.</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(438,247)"><text x="5" data-z-index="1" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">109.2 д.</tspan><tspan x="5" y="16">109.2 д.</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(439,287)"><text x="5" data-z-index="1" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round" style="">0.2 д.</tspan><tspan x="5" y="16">0.2 д.</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(465,327)"><text x="5" data-z-index="1" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">27.3 д.</tspan><tspan x="5" y="16">27.3 д.</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(473,367)"><text x="5" data-z-index="1" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round" style="">8 д.</tspan><tspan x="5" y="16">8 д.</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(0,-23009348023605)"><text x="5" data-z-index="1" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">91 д.</tspan><tspan x="5" y="16">91 д.</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item highcharts-data-label-hidden" data-z-index="1" transform="translate(23,-23009348023605)" opacity="0" style="pointer-events:none;"><text x="5" data-z-index="1" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">36.4 д.</tspan><tspan x="5" y="16">36.4 д.</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(58,-23009348023605)"><text x="5" data-z-index="1" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">54.6 д.</tspan><tspan x="5" y="16">54.6 д.</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item highcharts-data-label-hidden" data-z-index="1" transform="translate(111,-23009348023605)" opacity="0" style="pointer-events:none;"><text x="5" data-z-index="1" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">18.2 д.</tspan><tspan x="5" y="16">18.2 д.</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(129,-23009348023605)"><text x="5" data-z-index="1" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">54.6 д.</tspan><tspan x="5" y="16">54.6 д.</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(176,-23009348023605)"><text x="5" data-z-index="1" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">109.2 д.</tspan><tspan x="5" y="16">109.2 д.</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(282,-23009348023605)"><text x="5" data-z-index="1" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">109.2 д.</tspan><tspan x="5" y="16">109.2 д.</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item highcharts-data-label-hidden" data-z-index="1" transform="translate(399,-23009348023605)" opacity="0" style="pointer-events:none;"><text x="5" data-z-index="1" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">0.2 д.</tspan><tspan x="5" y="16">0.2 д.</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(392,-23009348023605)"><text x="5" data-z-index="1" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">27.3 д.</tspan><tspan x="5" y="16">27.3 д.</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(435,-23009348023605)"><text x="5" data-z-index="1" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;" y="16"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">8 д.</tspan><tspan x="5" y="16">8 д.</tspan></text></g></g><g class="highcharts-axis-labels highcharts-xaxis-labels graph-label-item-xAxis" data-z-index="7"></g><g class="highcharts-axis-labels highcharts-yaxis-labels" data-z-index="7"><text x="310" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="513" opacity="1">0</text><text x="358.18181818182" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="513" opacity="1">50</text><text x="406.36363636364" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="513" opacity="1">100</text><text x="454.54545454545" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="513" opacity="1">150</text><text x="502.72727272727" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="513" opacity="1">200</text><text x="550.90909090909" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="513" opacity="1">250</text><text x="599.09090909091" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="513" opacity="1">300</text><text x="647.27272727273" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="513" opacity="1">350</text><text x="695.45454545455" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="513" opacity="1">400</text><text x="743.63636363636" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="513" opacity="1">450</text><text x="791.81818181818" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="513" opacity="1">500</text><text x="830.203125" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="513" opacity="1">550</text></g><text x="840" class="highcharts-credits" text-anchor="end" data-z-index="8" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;" y="545">Highcharts.com</text><g class="highcharts-label highcharts-tooltip  highcharts-color-0" style="white-space:nowrap;pointer-events:none;" data-z-index="8" transform="translate(404,-9999)" opacity="0" visibility="hidden"><path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow" d="M 3.5 0.5 L 178.5 0.5 C 181.5 0.5 181.5 0.5 181.5 3.5 L 181.5 40.5 C 181.5 43.5 181.5 43.5 178.5 43.5 L 3.5 43.5 C 0.5 43.5 0.5 43.5 0.5 40.5 L 0.5 28 L -5.5 22 L 0.5 16 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5" transform="translate(1, 1)"></path><path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow" d="M 3.5 0.5 L 178.5 0.5 C 181.5 0.5 181.5 0.5 181.5 3.5 L 181.5 40.5 C 181.5 43.5 181.5 43.5 178.5 43.5 L 3.5 43.5 C 0.5 43.5 0.5 43.5 0.5 40.5 L 0.5 28 L -5.5 22 L 0.5 16 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3" transform="translate(1, 1)"></path><path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow" d="M 3.5 0.5 L 178.5 0.5 C 181.5 0.5 181.5 0.5 181.5 3.5 L 181.5 40.5 C 181.5 43.5 181.5 43.5 178.5 43.5 L 3.5 43.5 C 0.5 43.5 0.5 43.5 0.5 40.5 L 0.5 28 L -5.5 22 L 0.5 16 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#000000" stroke-opacity="0.15" stroke-width="1" transform="translate(1, 1)"></path><path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box" d="M 3.5 0.5 L 178.5 0.5 C 181.5 0.5 181.5 0.5 181.5 3.5 L 181.5 40.5 C 181.5 43.5 181.5 43.5 178.5 43.5 L 3.5 43.5 C 0.5 43.5 0.5 43.5 0.5 40.5 L 0.5 28 L -5.5 22 L 0.5 16 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#F47955" stroke-width="1"></path><text x="8" data-z-index="1" style="color:#333333;cursor:default;font-size:12px;fill:#333333;" y="20"><tspan style="font-size: 10px">Система водоподготовки, 2 500$</tspan><tspan style="fill:#F47955" x="8" dy="15">●</tspan><tspan dx="0"> Дней: </tspan><tspan style="font-weight:bold" dx="0">36.4</tspan></text></g></svg><span class="highcharts-title" data-z-index="4" style="position: absolute; font-family: &quot;SF UI Text Bold&quot;; font-size: 18px; white-space: nowrap; margin-left: 0px; margin-top: 0px; left: 10px; top: 7px; color: rgb(51, 51, 51);">План работ и сроки реализации Вашего проекта по этапам</span><div class="highcharts-axis-labels highcharts-xaxis-labels graph-label-item-xAxis" style="position: absolute; left: 0px; top: 0px; opacity: 1;"><span opacity="1" style="position: absolute; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 11px; white-space: nowrap; margin-left: 0px; margin-top: 0px; left: 10px; top: 109px; color: rgb(102, 102, 102); cursor: default; min-width: 250px; max-width: 250px; transform: rotate(0deg); transform-origin: 100% 11px; opacity: 1;">Умный дом, 0$</span><span opacity="1" style="position: absolute; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 11px; white-space: nowrap; margin-left: 0px; margin-top: 0px; left: 10px; top: 149px; color: rgb(102, 102, 102); cursor: default; min-width: 250px; max-width: 250px; transform: rotate(0deg); transform-origin: 100% 11px; opacity: 1;">Система водоподготовки, 2 500$</span><span opacity="1" style="position: absolute; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 11px; white-space: nowrap; margin-left: 0px; margin-top: 0px; left: 10px; top: 189px; color: rgb(102, 102, 102); cursor: default; min-width: 250px; max-width: 250px; transform: rotate(0deg); transform-origin: 100% 11px; opacity: 1;">Система питьевой воды, 1 500$</span><span opacity="1" style="position: absolute; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 11px; white-space: nowrap; margin-left: 0px; margin-top: 0px; left: 10px; top: 229px; color: rgb(102, 102, 102); cursor: default; min-width: 250px; max-width: 250px; transform: rotate(0deg); transform-origin: 100% 11px; opacity: 1;">Атизатопление, 680$</span><span opacity="1" style="position: absolute; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 11px; white-space: nowrap; margin-left: 0px; margin-top: 0px; left: 10px; top: 269px; color: rgb(102, 102, 102); cursor: default; min-width: 250px; max-width: 250px; transform: rotate(0deg); transform-origin: 100% 11px; opacity: 1;">Приточно-вытяжная системы, 0$</span><span opacity="1" style="position: absolute; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 11px; white-space: nowrap; margin-left: 0px; margin-top: 0px; left: 10px; top: 308px; color: rgb(102, 102, 102); cursor: default; min-width: 250px; max-width: 250px; transform: rotate(0deg); transform-origin: 100% 11px; opacity: 1;">Замена входной двери, 0$</span><span opacity="1" style="position: absolute; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 11px; white-space: nowrap; margin-left: 0px; margin-top: 0px; left: 10px; top: 348px; color: rgb(102, 102, 102); cursor: default; min-width: 250px; max-width: 250px; transform: rotate(0deg); transform-origin: 100% 11px; opacity: 1;">Теплый пол, 0$</span><span opacity="1" style="position: absolute; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 11px; white-space: nowrap; margin-left: 0px; margin-top: 0px; left: 10px; top: 388px; color: rgb(102, 102, 102); cursor: default; min-width: 250px; max-width: 250px; transform: rotate(0deg); transform-origin: 100% 11px; opacity: 1;">Биокамин, 0$</span><span opacity="1" style="position: absolute; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 11px; white-space: nowrap; margin-left: 0px; margin-top: 0px; left: 10px; top: 428px; color: rgb(102, 102, 102); cursor: default; min-width: 250px; max-width: 250px; transform: rotate(0deg); transform-origin: 100% 11px; opacity: 1;">Бойлер, 0$</span><span opacity="1" style="position: absolute; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 11px; white-space: nowrap; margin-left: 0px; margin-top: 0px; left: 10px; top: 468px; color: rgb(102, 102, 102); cursor: default; min-width: 250px; max-width: 250px; transform: rotate(0deg); transform-origin: 100% 11px; opacity: 1;">Шторы, 0$</span></div></div>
              </div>
            </div>

          </div>

      </div>

    </div>

    <div class="row result-wrap actions-wrap">
      
      <br>

      <div class="col-md-1"></div>
      <div class="col-md-4">
          <button type="button" id="toCountConstructionCalculator" class="btn btn-success"><span class="icon_calc"></span> Рассчитать стоимость</button>
      </div>
      <div class="col-md-3">
          <div class="form-group saveEmailWrap contact-form7">
              <!-- <label for="saveCCEmail">Email address</label> -->
              <input type="email" class="form-control wpcf7-text" name="email" placeholder="Ваш Email" id="saveCCEmail" required="">
          </div>
      </div>
      <div class="col-md-3">
          <button type="button" id="sendConstructionCalculator" class="btn btn-success" disabled>Получить результаты</button>
      </div>

      <br><br>

    </div>

    <div class="row mt-4 result-wrap">
  
      <div class="col-md-4">

        <div class="class-result">
          <div class="section-title">
            Основные процессы
          </div>
          <div class="section-price calc-apart__cost-eco">
            <span>219 625</span>$
          </div>
          <div class="section-time">24 мес 17 д</div>
        </div>
        
      </div>

      <div class="col-md-4">
        
        <div class="class-result">
          <div class="section-title">
            Дополнительные опции
          </div>
          <div class="section-price calc-apart__cost-eco">
            <span>219 625</span>$
          </div>
          <div class="section-time">24 мес 17 д</div>
        </div>
        
      </div>

      <div class="col-md-4">
        
        <div class="class-result">
          <div class="section-title">
            Общая стоимость
          </div>
          <div class="section-price calc-apart__cost-eco">
            <span>219 625</span>$
          </div>
          <div class="section-time">24 мес 17 д</div>
        </div>
        
      </div>

    </div>

    <div class="row">

      <div class="col-md-12">

        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                     <div class="calc__user-input-title panel-title options" data-toggle="collapse" data-target="#collapseOptions">
                         Дополнительные опции
                     </div>
                </div>
                <div id="collapseOptions" class="panel-collapse collapse">
                    <div class="panel-body">

                      <div class="row">
                        
                        <div class="col-md-6 add-params-wrap">

                            <div class="form-group">

                                  <div class="item-wrap">
                                        <div>
                                           <h5>Дизайнпроект</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="designProject" id="designProject1" value="1">
                                                <label class="form-check-label" for="designProject1">
                                                    Эконом
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="designProject" id="designProject2" value="2">
                                                <label class="form-check-label" for="designProject2">
                                                    Средний
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="designProject" id="designProject3" value="3">
                                                <label class="form-check-label" for="designProject3">
                                                    Премиум
                                                </label>
                                            </div>                          

                                        </div>
                                  </div>

                                  <div class="item-wrap">
                                        <div>
                                           <h5>Электроснабжение</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="engineeringNetworkProject" id="engineeringNetworkProject1" value="1">
                                                <label class="form-check-label" for="engineeringNetworkProject1">
                                                    Эконом
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="engineeringNetworkProject" id="engineeringNetworkProject2" value="2">
                                                <label class="form-check-label" for="engineeringNetworkProject2">
                                                    Средний
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="engineeringNetworkProject" id="engineeringNetworkProject3" value="3">
                                                <label class="form-check-label" for="engineeringNetworkProject3">
                                                    Премиум
                                                </label>
                                            </div>                          

                                        </div>
                                  </div>

                                  <div class="item-wrap">
                                        <div>
                                           <h5>Водоснабжение + канализация</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="waterSupplySewerage" id="waterSupplySewerage1" value="1">
                                                <label class="form-check-label" for="waterSupplySewerage1">
                                                    Эконом
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="waterSupplySewerage" id="waterSupplySewerage2" value="2">
                                                <label class="form-check-label" for="waterSupplySewerage2">
                                                    Средний
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="waterSupplySewerage" id="waterSupplySewerage3" value="3">
                                                <label class="form-check-label" for="waterSupplySewerage3">
                                                    Премиум
                                                </label>
                                            </div>                          

                                        </div>
                                  </div>

                                  <div class="item-wrap">
                                        <div>
                                           <h5>Отопление</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="heating" id="heating1" value="1">
                                                <label class="form-check-label" for="heating1">
                                                    Эконом
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="heating" id="heating2" value="2">
                                                <label class="form-check-label" for="heating2">
                                                    Средний
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="heating" id="heating3" value="3">
                                                <label class="form-check-label" for="heating3">
                                                    Премиум
                                                </label>
                                            </div>                          

                                        </div>
                                  </div>

                                  <div class="item-wrap">
                                        <div>
                                           <h5>Базовая вентиляция</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="basicVentilation" id="basicVentilation1" value="1">
                                                <label class="form-check-label" for="basicVentilation1">
                                                    Эконом
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="basicVentilation" id="basicVentilation2" value="2">
                                                <label class="form-check-label" for="basicVentilation2">
                                                    Средний
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="basicVentilation" id="basicVentilation3" value="3">
                                                <label class="form-check-label" for="basicVentilation3">
                                                    Премиум
                                                </label>
                                            </div>                          

                                        </div>
                                  </div>

                                  <div class="item-wrap">
                                        <div>
                                           <h5>Кондиционирование</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="conditioning" id="conditioning1" value="1">
                                                <label class="form-check-label" for="conditioning1">
                                                    Эконом
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="conditioning" id="conditioning2" value="2">
                                                <label class="form-check-label" for="conditioning2">
                                                    Средний
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="conditioning" id="conditioning3" value="3">
                                                <label class="form-check-label" for="conditioning3">
                                                    Премиум
                                                </label>
                                            </div>                          

                                        </div>
                                  </div>

                                  <div class="item-wrap">
                                        <div>
                                           <h5>Сантехника</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="plumbing" id="plumbing1" value="1">
                                                <label class="form-check-label" for="plumbing1">
                                                    Эконом
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="plumbing" id="plumbing2" value="2">
                                                <label class="form-check-label" for="plumbing2">
                                                    Средний
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="plumbing" id="plumbing3" value="3">
                                                <label class="form-check-label" for="plumbing3">
                                                    Премиум
                                                </label>
                                            </div>                          

                                        </div>
                                  </div>

                                  <div class="item-wrap">
                                        <div>
                                           <h5>Освещение + электрофурнитура</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="lightingElectricalAccessories" id="lightingElectricalAccessories1" value="1">
                                                <label class="form-check-label" for="lightingElectricalAccessories1">
                                                    Эконом
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="lightingElectricalAccessories" id="lightingElectricalAccessories2" value="2">
                                                <label class="form-check-label" for="lightingElectricalAccessories2">
                                                    Средний
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="lightingElectricalAccessories" id="lightingElectricalAccessories3" value="3">
                                                <label class="form-check-label" for="lightingElectricalAccessories3">
                                                    Премиум
                                                </label>
                                            </div>                          

                                        </div>
                                  </div>

                                  <div class="item-wrap">
                                        <div>
                                           <h5>Мебель</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="furniture" id="furniture1" value="1">
                                                <label class="form-check-label" for="furniture1">
                                                    Эконом
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="furniture" id="furniture2" value="2">
                                                <label class="form-check-label" for="furniture2">
                                                    Средний
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="furniture" id="furniture3" value="3">
                                                <label class="form-check-label" for="furniture3">
                                                    Премиум
                                                </label>
                                            </div>                                                    

                                        </div>
                                  </div>

                            </div>

                        </div>
                        <div class="col-md-6 add-params-wrap">
                          
                            <div class="form-group">

                                  <div class="item-wrap">
                                        <div>
                                           <h5>Стяжка</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="screed" id="screed1" value="1">
                                                <label class="form-check-label" for="screed1">
                                                    Эконом
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="screed" id="screed2" value="2">
                                                <label class="form-check-label" for="screed2">
                                                    Средний
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="screed" id="screed3" value="3">
                                                <label class="form-check-label" for="screed3">
                                                    Премиум
                                                </label>
                                            </div>                          

                                        </div>
                                  </div>

                                  <div class="item-wrap">
                                        <div>
                                           <h5>Перегородки</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="partitions" id="partitions1" value="1">
                                                <label class="form-check-label" for="partitions1">
                                                    Эконом
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="partitions" id="partitions2" value="2">
                                                <label class="form-check-label" for="partitions2">
                                                    Средний
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="partitions" id="partitions3" value="3">
                                                <label class="form-check-label" for="partitions3">
                                                    Премиум
                                                </label>
                                            </div>                          

                                        </div>
                                  </div>

                                  <div class="item-wrap">
                                        <div>
                                           <h5>Отделка стен</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="wallDecoration" id="wallDecoration1" value="1">
                                                <label class="form-check-label" for="wallDecoration1">
                                                    Эконом
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="wallDecoration" id="wallDecoration2" value="2">
                                                <label class="form-check-label" for="wallDecoration2">
                                                    Средний
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="wallDecoration" id="wallDecoration3" value="3">
                                                <label class="form-check-label" for="wallDecoration3">
                                                    Премиум
                                                </label>
                                            </div>                          

                                        </div>
                                  </div>

                                  <div class="item-wrap">
                                        <div>
                                           <h5>Отделка пола</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="floorFinish" id="floorFinish1" value="1">
                                                <label class="form-check-label" for="floorFinish1">
                                                    Эконом
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="floorFinish" id="floorFinish2" value="2">
                                                <label class="form-check-label" for="floorFinish2">
                                                    Средний
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="floorFinish" id="floorFinish3" value="3">
                                                <label class="form-check-label" for="floorFinish3">
                                                    Премиум
                                                </label>
                                            </div>                                                    

                                        </div>
                                  </div>

                                  <div class="item-wrap">
                                        <div>
                                           <h5>Межкомнатные двери</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="interiorDoors" id="interiorDoors1" value="1">
                                                <label class="form-check-label" for="interiorDoors1">
                                                    Эконом
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="interiorDoors" id="interiorDoors2" value="2">
                                                <label class="form-check-label" for="interiorDoors2">
                                                    Средний
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="interiorDoors" id="interiorDoors3" value="3">
                                                <label class="form-check-label" for="interiorDoors3">
                                                    Премиум
                                                </label>
                                            </div>                          

                                        </div>
                                  </div>

                                  <div class="item-wrap">
                                        <div>
                                           <h5>Уборка после строителей</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="cleaningAfterBuilders" id="cleaningAfterBuilders1" value="1">
                                                <label class="form-check-label" for="cleaningAfterBuilders1">
                                                    Эконом
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="cleaningAfterBuilders" id="cleaningAfterBuilders2" value="2">
                                                <label class="form-check-label" for="cleaningAfterBuilders2">
                                                    Средний
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="cleaningAfterBuilders" id="cleaningAfterBuilders3" value="3">
                                                <label class="form-check-label" for="cleaningAfterBuilders3">
                                                    Премиум
                                                </label>
                                            </div>                          

                                        </div>
                                  </div>

                                  <div class="item-wrap">
                                        <div>
                                           <h5>Бытовая техника</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appliances" id="appliances1" value="1">
                                                <label class="form-check-label" for="appliances1">
                                                    Эконом
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appliances" id="appliances2" value="2">
                                                <label class="form-check-label" for="appliances2">
                                                    Средний
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="appliances" id="appliances3" value="3">
                                                <label class="form-check-label" for="appliances3">
                                                    Премиум
                                                </label>
                                            </div>                          

                                        </div>
                                  </div>

                                  <div class="item-wrap">
                                        <div>
                                           <h5>Генеральная уборка</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="springCleaning" id="springCleaning1" value="1">
                                                <label class="form-check-label" for="springCleaning1">
                                                    Эконом
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="springCleaning" id="springCleaning2" value="2">
                                                <label class="form-check-label" for="springCleaning2">
                                                    Средний
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="springCleaning" id="springCleaning3" value="3">
                                                <label class="form-check-label" for="springCleaning3">
                                                    Премиум
                                                </label>
                                            </div>                          

                                        </div>
                                  </div>

                                  <div class="item-wrap">
                                        <div>
                                           <h5>Озеленение интерьера</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="landscaping" id="landscaping1" value="1">
                                                <label class="form-check-label" for="landscaping1">
                                                    Эконом
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="landscaping" id="landscaping2" value="2">
                                                <label class="form-check-label" for="landscaping2">
                                                    Средний
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="landscaping" id="landscaping3" value="3">
                                                <label class="form-check-label" for="landscaping3">
                                                    Премиум
                                                </label>
                                            </div>                          

                                        </div>
                                  </div>

                            </div>

                        </div>

                      </div>

                    </div>
                </div>
            </div>
        </div>

      </div>

    </div>

</form>
