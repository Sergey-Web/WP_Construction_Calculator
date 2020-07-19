
<form action="constructionCalculator" id="constructionCalculator">

    <div class="row">

      <div class="col-md-12">

          <div class="row">
            <div class="col-md-12">
               <div class="calc__user-input-title" style=" margin-bottom: 35px; ">
                   Выберите параметры
               </div>
            </div>
          </div>
          <div class="row sliders-wrap">
            <div class="col-md-3">
              
              <div data-role="rangeslider">
                  <label for="areaScroll">Площадь, кв.м:</label>
                  <input type="range" name="area" id="areaScroll" min="30" max="170">
                  <span class="range_min">30</span>
                  <span class="range_max">170</span>
              </div>

            </div>
            <div class="col-md-3">
              
              <div data-role="rangeslider">
                  <label for="numberRooms">Комнат</label>
                  <input type="range" name="numberRooms" id="numberRooms" min="1" max="5">
                  <span class="range_min">1</span>
                  <span class="range_max">5</span>
              </div>

            </div>
            <div class="col-md-3">
              
              <div data-role="rangeslider">
                  <label for="numberBathrooms">Санузлов</label>
                  <input type="range" name="numberBathrooms" id="numberBathrooms" min="1" max="4">
                  <span class="range_min">1</span>
                  <span class="range_max">4</span>
              </div>

            </div>
            <div class="col-md-3">
              
              <div data-role="rangeslider" newtest>
                  <label for="numberInhabitants">Жителей</label>
                  <input type="range" name="numberInhabitants" id="numberInhabitants" min="2" max="6">
                  <span class="range_min">2</span>
                  <span class="range_max">6</span>
              </div>

            </div>
          </div>

          <br><br>

      </div>

      <div class="col-md-12 main-params-wrap" style="position: relative;padding: 0;background: #fff;min-height: 570px;">

           <div class="calc__user-input-title" style=" position: absolute; top: 28px; left: 14px; z-index: 5; ">
               Выберите основные виды работ
           </div>
           <div class="calc__user-input-title" style=" position: absolute; top: 28px; left: calc(50% + 14px); z-index: 5; ">
               
           </div>

          <div class="main-options-wrap" style="position: absolute;top: 103px;width: 540px;z-index: 5;padding-left: 15px;">

              <div class="form-group">

                    <div class="item-wrap">
                          <div>
                             <h5>Электрснабжение</h5>
                          </div>
                          <div>

                                <div class="form-check" data-toggle="tooltip" title="Эта опция лучше, чем предыдущая, и вот почему...">
                                    <input class="form-check-input" type="radio" name="engineeringNetworkProject" id="engineeringNetworkProject1" value="1">
                                    <label class="form-check-label" for="engineeringNetworkProject1">
                                        Base
                                    </label>
                                </div>
                                <div class="form-check" data-toggle="tooltip" title="Эта опция лучше, чем предыдущая, и вот почему...">
                                    <input class="form-check-input" type="radio" name="engineeringNetworkProject" id="engineeringNetworkProject2" value="2">
                                    <label class="form-check-label" for="engineeringNetworkProject2">
                                        Recommend
                                    </label>
                                </div>
                                <div class="form-check" data-toggle="tooltip" title="Эта опция лучше, чем предыдущая, и вот почему...">
                                    <input class="form-check-input" type="radio" name="engineeringNetworkProject" id="engineeringNetworkProject3" value="3">
                                    <label class="form-check-label" for="engineeringNetworkProject3">
                                        Premium
                                    </label>
                                </div>

                            </div>

                    </div>
                    
                    <div class="item-wrap">
                          <div>
                             <h5>Водоснабжение и водоотведение</h5>
                          </div>
                          <div>

                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="waterSupplySewerage" id="waterSupplySewerage1" value="1">
                                  <label class="form-check-label" for="waterSupplySewerage1">
                                      Base
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="waterSupplySewerage" id="waterSupplySewerage2" value="2">
                                  <label class="form-check-label" for="waterSupplySewerage2">
                                      Recommend
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="waterSupplySewerage" id="waterSupplySewerage3" value="3">
                                  <label class="form-check-label" for="waterSupplySewerage3">
                                      Premium
                                  </label>
                              </div>

                          </div>

                    </div>
                    
                    <div class="item-wrap">
                          <div>
                             <h5>Система отопления</h5>
                          </div>
                          <div>

                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="heating" id="heating1" value="1">
                                  <label class="form-check-label" for="heating1">
                                      Base
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="heating" id="heating2" value="2">
                                  <label class="form-check-label" for="heating2">
                                      Recommend
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="heating" id="heating3" value="3">
                                  <label class="form-check-label" for="heating3">
                                      Premium
                                  </label>
                              </div>

                          </div>

                    </div>

                    <div class="item-wrap">
                          <div>
                             <h5>Стяжка пола</h5>
                          </div>
                          <div>

                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="screed" id="screed1" value="1">
                                  <label class="form-check-label" for="screed1">
                                      Base
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="screed" id="screed2" value="2">
                                  <label class="form-check-label" for="screed2">
                                      Recommend
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="screed" id="screed3" value="3">
                                  <label class="form-check-label" for="screed3">
                                      Premium
                                  </label>
                              </div>

                          </div>
                              
                    </div>

                    <div class="item-wrap">
                          <div>
                             <h5>Межкомнатные перегородки</h5>
                          </div>
                          <div>

                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="partitions" id="partitions1" value="1">
                                  <label class="form-check-label" for="partitions1">
                                      Base
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="partitions" id="partitions2" value="2">
                                  <label class="form-check-label" for="partitions2">
                                      Recommend
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="partitions" id="partitions3" value="3">
                                  <label class="form-check-label" for="partitions3">
                                      Premium
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
                                      Base
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="wallDecoration" id="wallDecoration2" value="2">
                                  <label class="form-check-label" for="wallDecoration2">
                                      Recommend
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="wallDecoration" id="wallDecoration3" value="3">
                                  <label class="form-check-label" for="wallDecoration3">
                                      Premium
                                  </label>
                              </div>

                          </div>
                              
                    </div>

                    <div class="item-wrap">
                          <div>
                             <h5>Отделка потолка</h5>
                          </div>
                          <div>

                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="ceilingDecoration" id="warmFloor41" value="1">
                                  <label class="form-check-label" for="warmFloor41">
                                      Base
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="ceilingDecoration" id="warmFloor42" value="2">
                                  <label class="form-check-label" for="warmFloor42">
                                      Recommend
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="ceilingDecoration" id="warmFloor43" value="3">
                                  <label class="form-check-label" for="warmFloor43">
                                      Premium
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
                                  <input class="form-check-input" type="radio" name="floorDecoration" id="floorFinish1" value="1">
                                  <label class="form-check-label" for="floorFinish1">
                                      Base
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="floorDecoration" id="floorFinish2" value="2">
                                  <label class="form-check-label" for="floorFinish2">
                                      Recommend
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="floorDecoration" id="floorFinish3" value="3">
                                  <label class="form-check-label" for="floorFinish3">
                                      Premium
                                  </label>
                              </div>

                          </div>
                              
                    </div>

                    <div class="item-wrap">
                          <div>
                             <h5>Вытяжная вентиляция</h5>
                          </div>
                          <div>

                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="exhaustVentilation" id="boiler11" value="1">
                                  <label class="form-check-label" for="boiler11">
                                      Base
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="exhaustVentilation" id="boiler12" value="2">
                                  <label class="form-check-label" for="boiler12">
                                      Recommend
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="exhaustVentilation" id="boiler13" value="3">
                                  <label class="form-check-label" for="boiler13">
                                      Premium
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
                                      Base
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="conditioning" id="conditioning2" value="2">
                                  <label class="form-check-label" for="conditioning2">
                                      Recommend
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="conditioning" id="conditioning3" value="3">
                                  <label class="form-check-label" for="conditioning3">
                                      Premium
                                  </label>
                              </div>

                          </div>
                              
                    </div>

                    <div class="item-wrap" newtest>
                          <div>
                             <h5>Межкомнатные двери</h5>
                          </div>
                          <div>

                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="interiorDoors" id="interiorDoors1" value="1">
                                  <label class="form-check-label" for="interiorDoors1">
                                      Base
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="interiorDoors" id="interiorDoors2" value="2">
                                  <label class="form-check-label" for="interiorDoors2">
                                      Recommend
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="interiorDoors" id="interiorDoors3" value="3">
                                  <label class="form-check-label" for="interiorDoors3">
                                      Premium
                                  </label>
                              </div>

                          </div>
                              
                    </div>

                    <div class="item-wrap" newtest>
                          <div>
                             <h5>Сантехника</h5>
                          </div>
                          <div>

                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="plumbing" id="plumbing1" value="1">
                                  <label class="form-check-label" for="plumbing1">
                                      Base
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="plumbing" id="plumbing2" value="2">
                                  <label class="form-check-label" for="plumbing2">
                                      Recommend
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="plumbing" id="plumbing3" value="3">
                                  <label class="form-check-label" for="plumbing3">
                                      Premium
                                  </label>
                              </div>

                          </div>
                              
                    </div>

                    <div class="item-wrap" newtest>
                          <div>
                             <h5>Светильники и электрофурнитура</h5>
                          </div>
                          <div>

                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="lightingElectricalAccessories" id="lightingElectricalAccessories1" value="1">
                                  <label class="form-check-label" for="lightingElectricalAccessories1">
                                      Base
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="lightingElectricalAccessories" id="lightingElectricalAccessories2" value="2">
                                  <label class="form-check-label" for="lightingElectricalAccessories2">
                                      Recommend
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="lightingElectricalAccessories" id="lightingElectricalAccessories3" value="3">
                                  <label class="form-check-label" for="lightingElectricalAccessories3">
                                      Premium
                                  </label>
                              </div>

                          </div>
                              
                    </div>

                    <div class="item-wrap" newtest>
                          <div>
                             <h5>Мебель</h5>
                          </div>
                          <div>

                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="furniture" id="furniture1" value="1">
                                  <label class="form-check-label" for="furniture1">
                                      Base
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="furniture" id="furniture2" value="2">
                                  <label class="form-check-label" for="furniture2">
                                      Recommend
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="furniture" id="furniture3" value="3">
                                  <label class="form-check-label" for="furniture3">
                                      Premium
                                  </label>
                              </div>

                          </div>
                              
                    </div>

                    <div class="item-wrap" newtest>
                          <div>
                             <h5>Бытовая техника</h5>
                          </div>
                          <div>

                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="appliances" id="appliances1" value="1">
                                  <label class="form-check-label" for="appliances1">
                                      Base
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="appliances" id="appliances2" value="2">
                                  <label class="form-check-label" for="appliances2">
                                      Recommend
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="appliances" id="appliances3" value="3">
                                  <label class="form-check-label" for="appliances3">
                                      Premium
                                  </label>
                              </div>

                          </div>
                              
                    </div>

                    <div class="item-wrap" newtest>
                          <div>
                             <h5>Профессиональная уборка</h5>
                          </div>
                          <div>

                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="cleaningAfterBuilders" id="cleaningAfterBuilders1" value="1">
                                  <label class="form-check-label" for="cleaningAfterBuilders1">
                                      Base
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="cleaningAfterBuilders" id="cleaningAfterBuilders2" value="2">
                                  <label class="form-check-label" for="cleaningAfterBuilders2">
                                      Recommend
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="cleaningAfterBuilders" id="cleaningAfterBuilders3" value="3">
                                  <label class="form-check-label" for="cleaningAfterBuilders3">
                                      Premium
                                  </label>
                              </div>

                          </div>
                              
                    </div>

              </div>

          </div>
        
          <div class="" style=" overflow: hidden;position: relative; z-index: 0;">

            <div style="position: relative; left: 130px;">
              <div id="timelineApartCalc" style="min-width: 310px; max-width: 850px; height: 620px; margin: 0 auto 0px;">
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
                      display: none !important;
                    }
                  </style>
                  <div id="highcharts-qwgmjaz-0" dir="ltr" class="highcharts-container " style="position: relative; overflow: hidden; width: 850px; height: 620px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); user-select: none;"><svg version="1.1" class="highcharts-root" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="850" height="620" viewBox="0 0 850 620"><desc>Created with Highcharts 8.1.1</desc><defs><clipPath id="highcharts-qwgmjaz-1-"><rect x="0" y="0" width="488" height="530" fill="none"></rect></clipPath></defs><rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="850" height="620" rx="0" ry="0"></rect><rect fill="none" class="highcharts-plot-background" x="310" y="96" width="530" height="488"></rect><g class="highcharts-pane-group" data-z-index="0"></g><g class="highcharts-grid highcharts-xaxis-grid graph-label-item-xAxis" data-z-index="1"><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 310 127.5 L 840 127.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 310 157.5 L 840 157.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 310 188.5 L 840 188.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 310 218.5 L 840 218.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 310 249.5 L 840 249.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 310 279.5 L 840 279.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 310 310.5 L 840 310.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 310 340.5 L 840 340.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 310 371.5 L 840 371.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 310 401.5 L 840 401.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 310 432.5 L 840 432.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 310 462.5 L 840 462.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 310 493.5 L 840 493.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 310 523.5 L 840 523.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 310 554.5 L 840 554.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 310 584.5 L 840 584.5" opacity="1"></path><path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 310 96.5 L 840 96.5" opacity="1"></path></g><g class="highcharts-grid highcharts-yaxis-grid" data-z-index="1"><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 309.5 96 L 309.5 584" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 362.5 96 L 362.5 584" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 415.5 96 L 415.5 584" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 468.5 96 L 468.5 584" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 521.5 96 L 521.5 584" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 574.5 96 L 574.5 584" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 627.5 96 L 627.5 584" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 680.5 96 L 680.5 584" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 733.5 96 L 733.5 584" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 786.5 96 L 786.5 584" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 840.5 96 L 840.5 584" opacity="1"></path></g><rect fill="none" class="highcharts-plot-border" data-z-index="1" x="310" y="96" width="530" height="488"></rect><g class="highcharts-axis highcharts-xaxis graph-label-item-xAxis" data-z-index="2"><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 310 127.5 L 300 127.5" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 310 157.5 L 300 157.5" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 310 188.5 L 300 188.5" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 310 218.5 L 300 218.5" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 310 249.5 L 300 249.5" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 310 279.5 L 300 279.5" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 310 310.5 L 300 310.5" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 310 340.5 L 300 340.5" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 310 371.5 L 300 371.5" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 310 401.5 L 300 401.5" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 310 432.5 L 300 432.5" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 310 462.5 L 300 462.5" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 310 493.5 L 300 493.5" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 310 523.5 L 300 523.5" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 310 554.5 L 300 554.5" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 310 584.5 L 300 584.5" opacity="1"></path><path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 310 95.5 L 300 95.5" opacity="1"></path><path fill="none" class="highcharts-axis-line" stroke="#ccd6eb" stroke-width="1" data-z-index="7" d="M 309.5 96 L 309.5 584"></path></g><g class="highcharts-axis highcharts-yaxis" data-z-index="2"><path fill="none" class="highcharts-axis-line" data-z-index="7" d="M 310 584 L 840 584"></path></g><g class="highcharts-series-group" data-z-index="3"><g class="highcharts-series highcharts-series-0 highcharts-columnrange-series highcharts-color-0 highcharts-tracker" data-z-index="0.1" opacity="1" transform="translate(840,584) rotate(90) scale(-1,1) scale(1 1)" clip-path="url(http://test-server.com.ua/calculator/#highcharts-qwgmjaz-1-)"><rect x="464.5" y="481.77" width="15" height="48.23000000000002" fill="#F1F1F1" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="434.5" y="472.336" width="15" height="19.079999999999984" fill="#F47955" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="403.5" y="443.186" width="15" height="29.150000000000034" fill="#F47955" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="373.5" y="433.64599999999996" width="15" height="9.54000000000002" fill="#F47955" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="342.5" y="404.496" width="15" height="29.149999999999977" fill="#F1F1F1" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="312.5" y="346.726" width="15" height="57.76999999999998" fill="#F1F1F1" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="281.5" y="288.956" width="15" height="57.76999999999998" fill="#F1F1F1" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="251.5" y="288.956" width="15" height="0" fill="#F1F1F1" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="220.5" y="274.64599999999996" width="15" height="14.31000000000006" fill="#F1F1F1" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="190.5" y="270.406" width="15" height="4.239999999999952" fill="rgb(241,241,241)" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="159.5" y="154.86599999999999" width="15" height="115.54000000000002" fill="#F1F1F1" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="129.5" y="146.916" width="15" height="7.949999999999989" fill="#F1F1F1" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="98.5" y="125.71600000000001" width="15" height="21.19999999999999" fill="#F1F1F1" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="68.5" y="104.51600000000002" width="15" height="21.19999999999999" fill="#F1F1F1" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="37.5" y="83.31599999999997" width="15" height="21.200000000000045" fill="#F1F1F1" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect><rect x="7.5" y="62.115999999999985" width="15" height="21.19999999999999" fill="#F1F1F1" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"></rect></g><g class="highcharts-markers highcharts-series-0 highcharts-columnrange-series highcharts-color-0" data-z-index="0.1" opacity="1" transform="translate(840,584) rotate(90) scale(-1,1) scale(1 1)" clip-path="none"></g></g><g class="highcharts-exporting-group" data-z-index="3"><g class="highcharts-button highcharts-contextbutton" stroke-linecap="round" transform="translate(816,10)"><rect fill="#ffffff" class="highcharts-button-box" x="0.5" y="0.5" width="24" height="22" rx="2" ry="2" stroke="none" stroke-width="1"></rect><title>Chart context menu</title><path fill="#666666" d="M 6 6.5 L 20 6.5 M 6 11.5 L 20 11.5 M 6 16.5 L 20 16.5" class="highcharts-button-symbol" data-z-index="1" stroke="#666666" stroke-width="3"></path><text x="0" data-z-index="1" y="12" style="color:#333333;cursor:pointer;font-weight:normal;fill:#333333;"></text></g></g><text x="425" text-anchor="middle" class="highcharts-subtitle" data-z-index="4" style="color:#666666;fill:#666666;" y="95"></text><text x="10" text-anchor="start" class="highcharts-caption" data-z-index="4" style="color:#666666;fill:#666666;" y="617"></text><g class="highcharts-data-labels highcharts-series-0 highcharts-columnrange-series highcharts-color-0 highcharts-tracker" data-z-index="6" opacity="1" transform="translate(310,96) scale(1 1)"><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(48,5)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round" style="">91 дней</tspan><tspan x="5" y="16">91 дней</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(58,35)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">36 дней</tspan><tspan x="5" y="16">36 дней</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(87,66)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">55 дней</tspan><tspan x="5" y="16">55 дней</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(96,96)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">18 дней</tspan><tspan x="5" y="16">18 дней</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(126,127)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">55 дней</tspan><tspan x="5" y="16">55 дней</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(183,157)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round" style="">109 дней</tspan><tspan x="5" y="16">109 дней</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(241,188)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">109 дней</tspan><tspan x="5" y="16">109 дней</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(241,218)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round" style="">0 дней</tspan><tspan x="5" y="16">0 дней</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(255,249)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">27 дней</tspan><tspan x="5" y="16">27 дней</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(260,279)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">8 дней</tspan><tspan x="5" y="16">8 дней</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(375,310)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">218 дней</tspan><tspan x="5" y="16">218 дней</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(383,340)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">15 дней</tspan><tspan x="5" y="16">15 дней</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(404,371)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">40 дней</tspan><tspan x="5" y="16">40 дней</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(425,401)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">40 дней</tspan><tspan x="5" y="16">40 дней</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(447,432)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">40 дней</tspan><tspan x="5" y="16">40 дней</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(468,462)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">40 дней</tspan><tspan x="5" y="16">40 дней</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(0,470)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">91 дней</tspan><tspan x="5" y="16">91 дней</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item highcharts-data-label-hidden" data-z-index="1" transform="translate(39,470)" opacity="0" style="pointer-events:none;"><text x="5" data-z-index="1" y="16" style="color:#FFFFFF;font-size:11px;font-weight:bold;fill:#FFFFFF;"><tspan x="5" y="16" class="highcharts-text-outline" fill="#000000" stroke="#000000" stroke-width="2px" stroke-linejoin="round">36 дней</tspan><tspan x="5" y="16">36 дней</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item highcharts-data-label-hidden" data-z-index="1" transform="translate(6,470)" opacity="0" style="pointer-events:none;"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">55 дней</tspan><tspan x="5" y="16">55 дней</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item highcharts-data-label-hidden" data-z-index="1" transform="translate(35,470)" opacity="0" style="pointer-events:none;"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">18 дней</tspan><tspan x="5" y="16">18 дней</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item highcharts-data-label-hidden" data-z-index="1" transform="translate(45,470)" opacity="0" style="pointer-events:none;"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">55 дней</tspan><tspan x="5" y="16">55 дней</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(67,470)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">109 дней</tspan><tspan x="5" y="16">109 дней</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(125,470)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">109 дней</tspan><tspan x="5" y="16">109 дней</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item highcharts-data-label-hidden" data-z-index="1" transform="translate(195,470)" opacity="0" style="pointer-events:none;"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">0 дней</tspan><tspan x="5" y="16">0 дней</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item highcharts-data-label-hidden" data-z-index="1" transform="translate(189,470)" opacity="0" style="pointer-events:none;"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">27 дней</tspan><tspan x="5" y="16">27 дней</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item highcharts-data-label-hidden" data-z-index="1" transform="translate(209,470)" opacity="0" style="pointer-events:none;"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">8 дней</tspan><tspan x="5" y="16">8 дней</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(201,470)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">218 дней</tspan><tspan x="5" y="16">218 дней</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item highcharts-data-label-hidden" data-z-index="1" transform="translate(324,470)" opacity="0" style="pointer-events:none;"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">15 дней</tspan><tspan x="5" y="16">15 дней</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(331,470)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">40 дней</tspan><tspan x="5" y="16">40 дней</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item highcharts-data-label-hidden" data-z-index="1" transform="translate(353,470)" opacity="0" style="pointer-events:none;"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">40 дней</tspan><tspan x="5" y="16">40 дней</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item" data-z-index="1" transform="translate(374,470)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">40 дней</tspan><tspan x="5" y="16">40 дней</tspan></text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-0 graph-label-item highcharts-data-label-hidden" data-z-index="1" transform="translate(395,470)" opacity="0" style="pointer-events:none;"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan x="5" y="16" class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">40 дней</tspan><tspan x="5" y="16">40 дней</tspan></text></g></g><g class="highcharts-axis-labels highcharts-xaxis-labels graph-label-item-xAxis" data-z-index="7"></g><g class="highcharts-axis-labels highcharts-yaxis-labels" data-z-index="7"><text x="310" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="603" opacity="1">0</text><text x="363" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="603" opacity="1">100</text><text x="416" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="603" opacity="1">200</text><text x="469" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="603" opacity="1">300</text><text x="522" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="603" opacity="1">400</text><text x="575" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="603" opacity="1">500</text><text x="628" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="603" opacity="1">600</text><text x="681" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="603" opacity="1">700</text><text x="734" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="603" opacity="1">800</text><text x="787" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="603" opacity="1">900</text><text x="826.75" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="603" opacity="1"><tspan>10…</tspan><title>1000</title></text></g><text x="840" class="highcharts-credits" text-anchor="end" data-z-index="8" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;" y="615">Highcharts.com</text><g class="highcharts-label highcharts-tooltip highcharts-color-0" style="white-space:nowrap;pointer-events:none;" data-z-index="8" transform="translate(573,-9999)" opacity="0" visibility="hidden"><path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow" d="M 3.5 0.5 L 68.5 0.5 C 71.5 0.5 71.5 0.5 71.5 3.5 L 71.5 41.5 C 71.5 44.5 71.5 44.5 68.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 28 L -5.5 22 L 0.5 16 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5" transform="translate(1, 1)"></path><path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow" d="M 3.5 0.5 L 68.5 0.5 C 71.5 0.5 71.5 0.5 71.5 3.5 L 71.5 41.5 C 71.5 44.5 71.5 44.5 68.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 28 L -5.5 22 L 0.5 16 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3" transform="translate(1, 1)"></path><path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow" d="M 3.5 0.5 L 68.5 0.5 C 71.5 0.5 71.5 0.5 71.5 3.5 L 71.5 41.5 C 71.5 44.5 71.5 44.5 68.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 28 L -5.5 22 L 0.5 16 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#000000" stroke-opacity="0.15" stroke-width="1" transform="translate(1, 1)"></path><path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box" d="M 3.5 0.5 L 68.5 0.5 C 71.5 0.5 71.5 0.5 71.5 3.5 L 71.5 41.5 C 71.5 44.5 71.5 44.5 68.5 44.5 L 3.5 44.5 C 0.5 44.5 0.5 44.5 0.5 41.5 L 0.5 28 L -5.5 22 L 0.5 16 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#F1F1F1" stroke-width="1"></path><text x="8" data-z-index="1" y="20" style="color:#333333;cursor:default;font-size:12px;fill:#333333;"><tspan style="font-size: 10px">Шторы, 0$</tspan><tspan style="fill:#F1F1F1" x="8" dy="15">●</tspan><tspan dx="0"> Дней: </tspan><tspan style="font-weight:bold" dx="0">8</tspan></text></g></svg><span class="highcharts-title" data-z-index="4" style="position: absolute; font-family: &quot;SF UI Text Bold&quot;; font-size: 18px; white-space: nowrap; margin-left: 0px; margin-top: 0px; left: 10px; top: 7px; color: rgb(51, 51, 51);">План работ и сроки реализации Вашего проекта по этапам</span><div class="highcharts-axis-labels highcharts-xaxis-labels graph-label-item-xAxis" style="position: absolute; left: 0px; top: 0px; opacity: 1;"><span opacity="1" style="position: absolute; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 11px; white-space: nowrap; margin-left: 0px; margin-top: 0px; left: 10px; top: 105px; color: rgb(102, 102, 102); cursor: default; min-width: 250px; max-width: 250px; transform: rotate(0deg); transform-origin: 100% 11px; opacity: 1;">Умный дом, 0$</span><span opacity="1" style="position: absolute; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 11px; white-space: nowrap; margin-left: 0px; margin-top: 0px; left: 10px; top: 135px; color: rgb(102, 102, 102); cursor: default; min-width: 250px; max-width: 250px; transform: rotate(0deg); transform-origin: 100% 11px; opacity: 1;">Система водоподготовки, 2 500$</span><span opacity="1" style="position: absolute; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 11px; white-space: nowrap; margin-left: 0px; margin-top: 0px; left: 10px; top: 166px; color: rgb(102, 102, 102); cursor: default; min-width: 250px; max-width: 250px; transform: rotate(0deg); transform-origin: 100% 11px; opacity: 1;">Система питьевой воды, 1 500$</span><span opacity="1" style="position: absolute; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 11px; white-space: nowrap; margin-left: 0px; margin-top: 0px; left: 10px; top: 196px; color: rgb(102, 102, 102); cursor: default; min-width: 250px; max-width: 250px; transform: rotate(0deg); transform-origin: 100% 11px; opacity: 1;">Атизатопление, 680$</span><span opacity="1" style="position: absolute; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 11px; white-space: nowrap; margin-left: 0px; margin-top: 0px; left: 10px; top: 227px; color: rgb(102, 102, 102); cursor: default; min-width: 250px; max-width: 250px; transform: rotate(0deg); transform-origin: 100% 11px; opacity: 1;">Приточно-вытяжная системы, 0$</span><span opacity="1" style="position: absolute; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 11px; white-space: nowrap; margin-left: 0px; margin-top: 0px; left: 10px; top: 257px; color: rgb(102, 102, 102); cursor: default; min-width: 250px; max-width: 250px; transform: rotate(0deg); transform-origin: 100% 11px; opacity: 1;">Замена входной двери, 0$</span><span opacity="1" style="position: absolute; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 11px; white-space: nowrap; margin-left: 0px; margin-top: 0px; left: 10px; top: 288px; color: rgb(102, 102, 102); cursor: default; min-width: 250px; max-width: 250px; transform: rotate(0deg); transform-origin: 100% 11px; opacity: 1;">Теплый пол, 0$</span><span opacity="1" style="position: absolute; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 11px; white-space: nowrap; margin-left: 0px; margin-top: 0px; left: 10px; top: 318px; color: rgb(102, 102, 102); cursor: default; min-width: 250px; max-width: 250px; transform: rotate(0deg); transform-origin: 100% 11px; opacity: 1;">Биокамин, 0$</span><span opacity="1" style="position: absolute; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 11px; white-space: nowrap; margin-left: 0px; margin-top: 0px; left: 10px; top: 349px; color: rgb(102, 102, 102); cursor: default; min-width: 250px; max-width: 250px; transform: rotate(0deg); transform-origin: 100% 11px; opacity: 1;">Бойлер, 0$</span><span opacity="1" style="position: absolute; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 11px; white-space: nowrap; margin-left: 0px; margin-top: 0px; left: 10px; top: 379px; color: rgb(102, 102, 102); cursor: default; min-width: 250px; max-width: 250px; transform: rotate(0deg); transform-origin: 100% 11px; opacity: 1;">Шторы, 0$</span><span opacity="1" style="position: absolute; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 11px; white-space: nowrap; margin-left: 0px; margin-top: 0px; left: 10px; top: 410px; color: rgb(102, 102, 102); cursor: default; min-width: 250px; max-width: 250px; transform: rotate(0deg); transform-origin: 100% 11px; opacity: 1;">Озеленение интерьера, 0$</span><span opacity="1" style="position: absolute; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 11px; white-space: nowrap; margin-left: 0px; margin-top: 0px; left: 10px; top: 440px; color: rgb(102, 102, 102); cursor: default; min-width: 250px; max-width: 250px; transform: rotate(0deg); transform-origin: 100% 11px; opacity: 1;">Дизайн проект, 0$</span><span opacity="1" style="position: absolute; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 11px; white-space: nowrap; margin-left: 0px; margin-top: 0px; left: 10px; top: 471px; color: rgb(102, 102, 102); cursor: default; min-width: 250px; max-width: 250px; transform: rotate(0deg); transform-origin: 100% 11px; opacity: 1;">Электроснабжение, 0$</span><span opacity="1" style="position: absolute; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 11px; white-space: nowrap; margin-left: 0px; margin-top: 0px; left: 10px; top: 501px; color: rgb(102, 102, 102); cursor: default; min-width: 250px; max-width: 250px; transform: rotate(0deg); transform-origin: 100% 11px; opacity: 1;">Водоснабжение + канализация, 0$</span><span opacity="1" style="position: absolute; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 11px; white-space: nowrap; margin-left: 0px; margin-top: 0px; left: 10px; top: 532px; color: rgb(102, 102, 102); cursor: default; min-width: 250px; max-width: 250px; transform: rotate(0deg); transform-origin: 100% 11px; opacity: 1;">Отопление, 0$</span><span opacity="1" style="position: absolute; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 11px; white-space: nowrap; margin-left: 0px; margin-top: 0px; left: 10px; top: 562px; color: rgb(102, 102, 102); cursor: default; min-width: 250px; max-width: 250px; transform: rotate(0deg); transform-origin: 100% 11px; opacity: 1;">Базовая вентиляция, 0$</span></div></div>
              </div>
            </div>

          </div>

      </div>

    </div>

    <div class="row mt-4">

      <div class="col-md-12">

        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                     <div class="calc__user-input-title panel-title options" id="options-accordion" data-toggle="collapse" data-target="#collapseOptions">
                         Выберите дополнительные опции
                          <!-- <div class="arrow-7">
                              <span></span>
                              <span></span>
                              <span></span>
                          </div> -->
                     </div>
                </div>
                <div id="collapseOptions" class="panel-collapse collapse">
                    <div class="panel-body">

                      <div class="row">
                        
                        <div class="col-md-6 add-params-wrap">

                            <div class="form-group">

                                  <div class="item-wrap">
                                        <div>
                                           <h5>Звукоизоляция потолка</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="soundproofingCeiling" id="designProject1" value="1">
                                                <label class="form-check-label" for="designProject1">
                                                    Base
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="soundproofingCeiling" id="designProject2" value="2">
                                                <label class="form-check-label" for="designProject2">
                                                    Recommend
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="soundproofingCeiling" id="designProject3" value="3">
                                                <label class="form-check-label" for="designProject3">
                                                    Premium
                                                </label>
                                            </div>                          

                                        </div>
                                  </div>

                                  <div class="item-wrap">
                                        <div>
                                           <h5>Звукоизоляция стены</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="soundproofingWalls" id="engineeringNetworkProject11" value="1">
                                                <label class="form-check-label" for="engineeringNetworkProject11">
                                                    Base
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="soundproofingWalls" id="engineeringNetworkProject12" value="2">
                                                <label class="form-check-label" for="engineeringNetworkProject12">
                                                    Recommend
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="soundproofingWalls" id="engineeringNetworkProject13" value="3">
                                                <label class="form-check-label" for="engineeringNetworkProject13">
                                                    Premium
                                                </label>
                                            </div>                          

                                        </div>
                                  </div>

                                  <div class="item-wrap">
                                        <div>
                                           <h5>Звукоизоляция полы</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="soundproofingFloor" id="waterSupplySewerage11" value="1">
                                                <label class="form-check-label" for="waterSupplySewerage11">
                                                    Base
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="soundproofingFloor" id="waterSupplySewerage12" value="2">
                                                <label class="form-check-label" for="waterSupplySewerage12">
                                                    Recommend
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="soundproofingFloor" id="waterSupplySewerage13" value="3">
                                                <label class="form-check-label" for="waterSupplySewerage13">
                                                    Premium
                                                </label>
                                            </div>                          

                                        </div>
                                  </div>

                                  <div class="item-wrap">
                                        <div>
                                           <h5>Входная дверь</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="entranceDoor" id="heating11" value="1">
                                                <label class="form-check-label" for="heating11">
                                                    Base
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="entranceDoor" id="heating12" value="2">
                                                <label class="form-check-label" for="heating12">
                                                    Recommend
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="entranceDoor" id="heating13" value="3">
                                                <label class="form-check-label" for="heating13">
                                                    Premium
                                                </label>
                                            </div>                          

                                        </div>
                                  </div>

                                  <div class="item-wrap">
                                        <div>
                                           <h5>Электрический теплый пол в санузлах</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="electricUnderfloorHeatingBathrooms" id="warmFloor21" value="1">
                                                <label class="form-check-label" for="warmFloor21">
                                                    Base
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="electricUnderfloorHeatingBathrooms" id="warmFloor22" value="2">
                                                <label class="form-check-label" for="warmFloor22">
                                                    Recommend
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="electricUnderfloorHeatingBathrooms" id="warmFloor23" value="3">
                                                <label class="form-check-label" for="warmFloor23">
                                                    Premium
                                                </label>
                                            </div>                          

                                        </div>
                                  </div>

                                  <div class="item-wrap">
                                        <div>
                                           <h5>Электрический теплый пол на кухне</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="electricUnderfloorHeatingKitchen" id="warmFloor11" value="1">
                                                <label class="form-check-label" for="warmFloor11">
                                                    Base
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="electricUnderfloorHeatingKitchen" id="warmFloor12" value="2">
                                                <label class="form-check-label" for="warmFloor12">
                                                    Recommend
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="electricUnderfloorHeatingKitchen" id="warmFloor13" value="3">
                                                <label class="form-check-label" for="warmFloor13">
                                                    Premium
                                                </label>
                                            </div>                          

                                        </div>
                                  </div>

                                  <div class="item-wrap">
                                        <div>
                                           <h5>Приточно-вытяжная вентиляция</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="supplyExhaustVentilation" id="basicVentilation1" value="1">
                                                <label class="form-check-label" for="basicVentilation1">
                                                    Base
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="supplyExhaustVentilation" id="basicVentilation2" value="2">
                                                <label class="form-check-label" for="basicVentilation2">
                                                    Recommend
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="supplyExhaustVentilation" id="basicVentilation3" value="3">
                                                <label class="form-check-label" for="basicVentilation3">
                                                    Premium
                                                </label>
                                            </div>                          

                                        </div>
                                  </div>

                                  <div class="item-wrap">
                                        <div>
                                           <h5>Система умный дом</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="smartHouse" id="smartHouse1" value="1">
                                                <label class="form-check-label" for="smartHouse1">
                                                    Base
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="smartHouse" id="smartHouse2" value="2">
                                                <label class="form-check-label" for="smartHouse2">
                                                    Recommend
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="smartHouse" id="smartHouse3" value="3">
                                                <label class="form-check-label" for="smartHouse3">
                                                    Premium
                                                </label>
                                            </div>                          

                                        </div>
                                  </div>

                                  <div class="item-wrap">
                                        <div>
                                           <h5>Система водоподготовки</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="waterTreatmentSystem" id="waterTreatmentSystem1" value="1">
                                                <label class="form-check-label" for="waterTreatmentSystem1">
                                                    Base
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="waterTreatmentSystem" id="waterTreatmentSystem2" value="2">
                                                <label class="form-check-label" for="waterTreatmentSystem2">
                                                    Recommend
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="waterTreatmentSystem" id="waterTreatmentSystem3" value="3">
                                                <label class="form-check-label" for="waterTreatmentSystem3">
                                                    Premium
                                                </label>
                                            </div>                                                    

                                        </div>
                                  </div>

                                  <div class="item-wrap" newtest>
                                        <div>
                                           <h5>Система питьевой воды</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="drinkingWaterSystem" id="drinkingWaterSystem1" value="1">
                                                <label class="form-check-label" for="drinkingWaterSystem1">
                                                    Base
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="drinkingWaterSystem" id="drinkingWaterSystem2" value="2">
                                                <label class="form-check-label" for="drinkingWaterSystem2">
                                                    Recommend
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="drinkingWaterSystem" id="drinkingWaterSystem3" value="3">
                                                <label class="form-check-label" for="drinkingWaterSystem3">
                                                    Premium
                                                </label>
                                            </div>                          

                                        </div>
                                  </div>

                                  <div class="item-wrap" newtest>
                                        <div>
                                           <h5>Система антизатопление</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="antiFlooding" id="antiFlooding1" value="1">
                                                <label class="form-check-label" for="antiFlooding1">
                                                    Base
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="antiFlooding" id="antiFlooding2" value="2">
                                                <label class="form-check-label" for="antiFlooding2">
                                                    Recommend
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="antiFlooding" id="antiFlooding3" value="3">
                                                <label class="form-check-label" for="antiFlooding3">
                                                    Premium
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
                                           <h5>Гигиенический душ</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="hygienicShower" id="screed11" value="1">
                                                <label class="form-check-label" for="screed11">
                                                    Base
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="hygienicShower" id="screed12" value="2">
                                                <label class="form-check-label" for="screed12">
                                                    Recommend
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="hygienicShower" id="screed13" value="3">
                                                <label class="form-check-label" for="screed13">
                                                    Premium
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
                                                    Base
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="boiler" id="boiler2" value="2">
                                                <label class="form-check-label" for="boiler2">
                                                    Recommend
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="boiler" id="boiler3" value="3">
                                                <label class="form-check-label" for="boiler3">
                                                    Premium
                                                </label>
                                            </div>                          

                                        </div>
                                  </div>

                                  <div class="item-wrap">
                                        <div>
                                           <h5>Измельчитель пищевых отходов</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="foodWasteDisposer" id="wallDecoration11" value="1">
                                                <label class="form-check-label" for="wallDecoration11">
                                                    Base
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="foodWasteDisposer" id="wallDecoration12" value="2">
                                                <label class="form-check-label" for="wallDecoration12">
                                                    Recommend
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="foodWasteDisposer" id="wallDecoration13" value="3">
                                                <label class="form-check-label" for="wallDecoration13">
                                                    Premium
                                                </label>
                                            </div>                          

                                        </div>
                                  </div>

                                  <div class="item-wrap">
                                        <div>
                                           <h5>Сушильная машина</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="dryingMachine" id="floorFinish11" value="1">
                                                <label class="form-check-label" for="floorFinish11">
                                                    Base
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="dryingMachine" id="floorFinish12" value="2">
                                                <label class="form-check-label" for="floorFinish12">
                                                    Recommend
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="dryingMachine" id="floorFinish13" value="3">
                                                <label class="form-check-label" for="floorFinish13">
                                                    Premium
                                                </label>
                                            </div>                                                    

                                        </div>
                                  </div>

                                  <div class="item-wrap">
                                        <div>
                                           <h5>Домашний кинотеатр</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="homeCinema" id="interiorDoors11" value="1">
                                                <label class="form-check-label" for="interiorDoors11">
                                                    Base
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="homeCinema" id="interiorDoors12" value="2">
                                                <label class="form-check-label" for="interiorDoors12">
                                                    Recommend
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="homeCinema" id="interiorDoors13" value="3">
                                                <label class="form-check-label" for="interiorDoors13">
                                                    Premium
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
                                                    Base
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="bioFireplace" id="bioFireplace2" value="2">
                                                <label class="form-check-label" for="bioFireplace2">
                                                    Recommend
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="bioFireplace" id="bioFireplace3" value="3">
                                                <label class="form-check-label" for="bioFireplace3">
                                                    Premium
                                                </label>
                                            </div>                          

                                        </div>
                                  </div>

                                  <div class="item-wrap">
                                        <div>
                                           <h5>Шторы и тюль</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="curtainsTulle" id="curtains11" value="1">
                                                <label class="form-check-label" for="curtains11">
                                                    Base
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="curtainsTulle" id="curtains12" value="2">
                                                <label class="form-check-label" for="curtains12">
                                                    Recommend
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="curtainsTulle" id="curtains13" value="3">
                                                <label class="form-check-label" for="curtains13">
                                                    Premium
                                                </label>
                                            </div>                          

                                        </div>
                                  </div>

                                  <div class="item-wrap">
                                        <div>
                                           <h5>Карнизы</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="curtains" id="curtains1" value="1">
                                                <label class="form-check-label" for="curtains1">
                                                    Base
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="curtains" id="curtains2" value="2">
                                                <label class="form-check-label" for="curtains2">
                                                    Recommend
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="curtains" id="curtains3" value="3">
                                                <label class="form-check-label" for="curtains3">
                                                    Premium
                                                </label>
                                            </div>                          

                                        </div>
                                  </div>

                                  <div class="item-wrap">
                                        <div>
                                           <h5>Матрасы на кровати</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="mattressesBed" id="landscaping11" value="1">
                                                <label class="form-check-label" for="landscaping11">
                                                    Base
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="mattressesBed" id="landscaping12" value="2">
                                                <label class="form-check-label" for="landscaping12">
                                                    Recommend
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="mattressesBed" id="landscaping13" value="3">
                                                <label class="form-check-label" for="landscaping13">
                                                    Premium
                                                </label>
                                            </div>                          

                                        </div>
                                  </div>

                                  <div class="item-wrap" newtest>
                                        <div>
                                           <h5>Озеленение интерьера</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="landscaping" id="landscaping1" value="1">
                                                <label class="form-check-label" for="landscaping1">
                                                    Base
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="landscaping" id="landscaping2" value="2">
                                                <label class="form-check-label" for="landscaping2">
                                                    Recommend
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="landscaping" id="landscaping3" value="3">
                                                <label class="form-check-label" for="landscaping3">
                                                    Premium
                                                </label>
                                            </div>                          

                                        </div>
                                  </div>

                                  <div class="item-wrap" newtest>
                                        <div>
                                           <h5>Фитостена</h5>
                                        </div>
                                        <div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="phytowall" id="landscaping21" value="1">
                                                <label class="form-check-label" for="landscaping21">
                                                    Base
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="phytowall" id="landscaping22" value="2">
                                                <label class="form-check-label" for="landscaping22">
                                                    Recommend
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="phytowall" id="landscaping23" value="3">
                                                <label class="form-check-label" for="landscaping23">
                                                    Premium
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

    <div class="row mt-4 results-section">
      
      <div class="col-md-6 result-wrap">
        <div class="row ">
          <div class="col-md-4">
            <div class="class-result first">
              <div class="section-title">
                Осн. процессы
              </div>
              <div class="section-price calc-apart__cost-eco">
                <span>10 219 625</span>$
              </div>
              <!-- <div class="section-time">24 мес 17 д</div> -->
            </div>
          </div>
          <div class="col-md-4">
            <div class="class-result first">
              <div class="section-title">
                Доп. опции
              </div>
              <div class="section-price calc-apart__cost-eco">
                <span>219 625</span>$
              </div>
              <!-- <div class="section-time">24 мес 17 д</div> -->
            </div>
          </div>
          <div class="col-md-4">
            <div class="class-result">
              <div class="section-title title-totaltitle">
                Итого
              </div>
              <div class="section-price title-totalprice calc-apart__cost-eco">
                <span>219 625</span>$
              </div>
              <div class="section-time">24 мес 17 д</div>
            </div>
          </div>
        </div>     
      </div>
      <div class="col-md-6 result-wrap actions-wrap">
        <div class="row ">
          <br>

          <div class="col-md-12">
              <button type="button" id="toCountConstructionCalculator" class="btn btn-success"><span class="icon_calc"></span> Рассчитать стоимость</button>
          </div>
          <div class="col-md-12">
            <div class="row send-wrap">
              <div class="col-md-6">
                  <div class="form-group saveEmailWrap contact-form7">
                      <!-- <label for="saveCCEmail">Email address</label> -->
                      <input type="email" class="form-control wpcf7-text" name="email" placeholder="Ваш Email" id="saveCCEmail" required="">
                  </div>
              </div>
              <div class="col-md-6">
                  <button type="button" id="sendConstructionCalculator" class="btn btn-success" disabled>Получить результаты</button>
              </div>
            </div>
          </div>
          <div class="send-btn">
            <img src="/wp-content/themes/kzm/img/download.png" style=" width: 40px; " alt="">
          </div>

          <br><br>
        </div>  
      </div>

    </div>

</form>
