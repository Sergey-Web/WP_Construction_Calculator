
<form action="constructionCalculator" id="constructionCalculator">

    <div class="row">

      <div class="col-md-6">

          <div data-role="rangeslider">
              <label for="areaScroll">Площадь, кв.м:</label>
              <input type="range" name="area" id="areaScroll" min="30" max="500">
          </div>
          <div data-role="rangeslider">
              <label for="numberRooms">Количество комнат:</label>
              <input type="range" name="numberRooms" id="numberRooms" min="1" max="12">
          </div>
          <div data-role="rangeslider">
              <label for="numberBathrooms">Количество санузлов</label>
              <input type="range" name="numberBathrooms" id="numberBathrooms" min="1" max="10">
          </div>

          <br><br>

      </div>

      <div class="col-md-6">

          <h4>Дополнительные опции:</h4>

          <div class="form-group">

            <div class="panel-group" id="accordion">
                <!-- First Panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h5 class="panel-title" data-toggle="collapse" data-target="#collapseOne">
                             Умный дом
                         </h5>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="smartHouse" id="smartHouse" value="0" checked>
                                <label class="form-check-label" for="smartHouse">
                                    Нет
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="smartHouse" id="smartHouse1" value="1">
                                <label class="form-check-label" for="smartHouse1">
                                    Эконом
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="smartHouse" id="smartHouse2" value="2">
                                <label class="form-check-label" for="smartHouse2">
                                    Средний
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="smartHouse" id="smartHouse3" value="3">
                                <label class="form-check-label" for="smartHouse3">
                                    Премиум
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
                
                <!-- Second Panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h5 class="panel-title" data-toggle="collapse" data-target="#collapseTwo">
                             Система водоподготовки (фильтр)
                         </h5>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">

                          <div class="form-check">
                              <input class="form-check-input" type="radio"  id="waterTreatmentSystem" name="waterTreatmentSystem" value="0" checked>
                              <label class="form-check-label" for="waterTreatmentSystem">
                                  Нет
                              </label>
                          </div>
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
                </div>
                
                <!-- Third Panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h5 class="panel-title" data-toggle="collapse" data-target="#collapseThree">
                             Система питьевой воды
                         </h5>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">

                          <div class="form-check">
                              <input class="form-check-input" type="radio"  id="drinkingWaterSystem" name="drinkingWaterSystem" value="0" checked>
                              <label class="form-check-label" for="drinkingWaterSystem">
                                  Нет
                              </label>
                          </div>
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
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h5 class="panel-title" data-toggle="collapse" data-target="#collapseItem4">
                             Атизатопление
                         </h5>
                    </div>
                    <div id="collapseItem4" class="panel-collapse collapse">
                        <div class="panel-body">

                          <div class="form-check">
                              <input class="form-check-input" type="radio"  id="antiFlooding" name="antiFlooding" value="0" checked>
                              <label class="form-check-label" for="antiFlooding">
                                  Нет
                              </label>
                          </div>
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
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h5 class="panel-title" data-toggle="collapse" data-target="#collapseItem5">
                             Приточно-вытяжная система
                         </h5>
                    </div>
                    <div id="collapseItem5" class="panel-collapse collapse">
                        <div class="panel-body">

                          <div class="form-check">
                              <input class="form-check-input" type="radio"  id="supplyExhaustSystem" name="supplyExhaustSystem" value="0" checked>
                              <label class="form-check-label" for="supplyExhaustSystem">
                                  Нет
                              </label>
                          </div>
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
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h5 class="panel-title" data-toggle="collapse" data-target="#collapseItem6">
                             Замена входной двери
                         </h5>
                    </div>
                    <div id="collapseItem6" class="panel-collapse collapse">
                        <div class="panel-body">

                          <div class="form-check">
                              <input class="form-check-input" type="radio"  id="doorReplacement" name="doorReplacement" value="0" checked>
                              <label class="form-check-label" for="doorReplacement">
                                  Нет
                              </label>
                          </div>
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
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h5 class="panel-title" data-toggle="collapse" data-target="#collapseItem7">
                             Теплый пол
                         </h5>
                    </div>
                    <div id="collapseItem7" class="panel-collapse collapse">
                        <div class="panel-body">

                          <div class="form-check">
                              <input class="form-check-input" type="radio"  id="warmFloor" name="warmFloor" value="0" checked>
                              <label class="form-check-label" for="warmFloor">
                                  Нет
                              </label>
                          </div>
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
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h5 class="panel-title" data-toggle="collapse" data-target="#collapseItem8">
                             Биокамин
                         </h5>
                    </div>
                    <div id="collapseItem8" class="panel-collapse collapse">
                        <div class="panel-body">

                          <div class="form-check">
                              <input class="form-check-input" type="radio"  id="bioFireplace" name="bioFireplace" value="0" checked>
                              <label class="form-check-label" for="bioFireplace">
                                  Нет
                              </label>
                          </div>
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
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h5 class="panel-title" data-toggle="collapse" data-target="#collapseItem9">
                             Бойлер
                         </h5>
                    </div>
                    <div id="collapseItem9" class="panel-collapse collapse">
                        <div class="panel-body">

                          <div class="form-check">
                              <input class="form-check-input" type="radio"  id="boiler" name="boiler" value="0" checked>
                              <label class="form-check-label" for="boiler">
                                  Нет
                              </label>
                          </div>
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
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h5 class="panel-title" data-toggle="collapse" data-target="#collapseItem10">
                             Шторы
                         </h5>
                    </div>
                    <div id="collapseItem10" class="panel-collapse collapse">
                        <div class="panel-body">

                          <div class="form-check">
                              <input class="form-check-input" type="radio"  id="curtains" name="curtains" value="0" checked>
                              <label class="form-check-label" for="curtains">
                                  Нет
                              </label>
                          </div>
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

                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h5 class="panel-title" data-toggle="collapse" data-target="#collapseItem11">
                             Озеленение интерьера
                         </h5>
                    </div>
                    <div id="collapseItem11" class="panel-collapse collapse">
                        <div class="panel-body">

                          <div class="form-check">
                              <input class="form-check-input" type="radio"  id="landscaping" name="landscaping" value="0" checked>
                              <label class="form-check-label" for="landscaping">
                                  Нет
                              </label>
                          </div>
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

                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h5 class="panel-title" data-toggle="collapse" data-target="#collapseItem12">
                             Дизайнпроект
                         </h5>
                    </div>
                    <div id="collapseItem12" class="panel-collapse collapse">
                        <div class="panel-body">

                          <div class="form-check">
                              <input class="form-check-input" type="radio"  id="designProject" name="designProject" value="0" checked>
                              <label class="form-check-label" for="designProject">
                                  Нет
                              </label>
                          </div>
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
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h5 class="panel-title" data-toggle="collapse" data-target="#collapseItem13">
                             Электроснабжение
                         </h5>
                    </div>
                    <div id="collapseItem13" class="panel-collapse collapse">
                        <div class="panel-body">

                          <div class="form-check">
                              <input class="form-check-input" type="radio"  id="engineeringNetworkProject" name="engineeringNetworkProject" value="0" checked>
                              <label class="form-check-label" for="engineeringNetworkProject">
                                  Нет
                              </label>
                          </div>
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
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h5 class="panel-title" data-toggle="collapse" data-target="#collapseItem14">
                             Водоснабжение + канализация
                         </h5>
                    </div>
                    <div id="collapseItem14" class="panel-collapse collapse">
                        <div class="panel-body">

                          <div class="form-check">
                              <input class="form-check-input" type="radio"  id="waterSupplySewerage" name="waterSupplySewerage" value="0" checked>
                              <label class="form-check-label" for="waterSupplySewerage">
                                  Нет
                              </label>
                          </div>
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
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h5 class="panel-title" data-toggle="collapse" data-target="#collapseItem15">
                             Отопление
                         </h5>
                    </div>
                    <div id="collapseItem15" class="panel-collapse collapse">
                        <div class="panel-body">

                          <div class="form-check">
                              <input class="form-check-input" type="radio"  id="heating" name="heating" value="0" checked>
                              <label class="form-check-label" for="heating">
                                  Нет
                              </label>
                          </div>
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
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h5 class="panel-title" data-toggle="collapse" data-target="#collapseItem16">
                             Базовая вентиляция
                         </h5>
                    </div>
                    <div id="collapseItem16" class="panel-collapse collapse">
                        <div class="panel-body">

                          <div class="form-check">
                              <input class="form-check-input" type="radio"  id="basicVentilation" name="basicVentilation" value="0" checked>
                              <label class="form-check-label" for="basicVentilation">
                                  Нет
                              </label>
                          </div>
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
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h5 class="panel-title" data-toggle="collapse" data-target="#collapseItem17">
                             Кондиционирование
                         </h5>
                    </div>
                    <div id="collapseItem17" class="panel-collapse collapse">
                        <div class="panel-body">

                          <div class="form-check">
                              <input class="form-check-input" type="radio"  id="conditioning" name="conditioning" value="0" checked>
                              <label class="form-check-label" for="conditioning">
                                  Нет
                              </label>
                          </div>
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
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h5 class="panel-title" data-toggle="collapse" data-target="#collapseItem18">
                             Стяжка
                         </h5>
                    </div>
                    <div id="collapseItem18" class="panel-collapse collapse">
                        <div class="panel-body">

                          <div class="form-check">
                              <input class="form-check-input" type="radio"  id="screed" name="screed" value="0" checked>
                              <label class="form-check-label" for="screed">
                                  Нет
                              </label>
                          </div>
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
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h5 class="panel-title" data-toggle="collapse" data-target="#collapseItem19">
                             Перегородки
                         </h5>
                    </div>
                    <div id="collapseItem19" class="panel-collapse collapse">
                        <div class="panel-body">

                          <div class="form-check">
                              <input class="form-check-input" type="radio"  id="partitions" name="partitions" value="0" checked>
                              <label class="form-check-label" for="partitions">
                                  Нет
                              </label>
                          </div>
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
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h5 class="panel-title" data-toggle="collapse" data-target="#collapseItem20">
                             Отделка стен
                         </h5>
                    </div>
                    <div id="collapseItem20" class="panel-collapse collapse">
                        <div class="panel-body">

                          <div class="form-check">
                              <input class="form-check-input" type="radio"  id="wallDecoration" name="wallDecoration" value="0" checked>
                              <label class="form-check-label" for="wallDecoration">
                                  Нет
                              </label>
                          </div>
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
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h5 class="panel-title" data-toggle="collapse" data-target="#collapseItem21">
                             Отделка пола
                         </h5>
                    </div>
                    <div id="collapseItem21" class="panel-collapse collapse">
                        <div class="panel-body">

                          <div class="form-check">
                              <input class="form-check-input" type="radio"  id="floorFinish" name="floorFinish" value="0" checked>
                              <label class="form-check-label" for="floorFinish">
                                  Нет
                              </label>
                          </div>
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
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h5 class="panel-title" data-toggle="collapse" data-target="#collapseItem22">
                             Межкомнатные двери
                         </h5>
                    </div>
                    <div id="collapseItem22" class="panel-collapse collapse">
                        <div class="panel-body">

                          <div class="form-check">
                              <input class="form-check-input" type="radio"  id="interiorDoors" name="interiorDoors" value="0" checked>
                              <label class="form-check-label" for="interiorDoors">
                                  Нет
                              </label>
                          </div>
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
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h5 class="panel-title" data-toggle="collapse" data-target="#collapseItem23">
                             Уборка после строителей
                         </h5>
                    </div>
                    <div id="collapseItem23" class="panel-collapse collapse">
                        <div class="panel-body">

                          <div class="form-check">
                              <input class="form-check-input" type="radio"  id="cleaningAfterBuilders" name="cleaningAfterBuilders" value="0" checked>
                              <label class="form-check-label" for="cleaningAfterBuilders">
                                  Нет
                              </label>
                          </div>
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
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h5 class="panel-title" data-toggle="collapse" data-target="#collapseItem24">
                             Сантехника
                         </h5>
                    </div>
                    <div id="collapseItem24" class="panel-collapse collapse">
                        <div class="panel-body">

                          <div class="form-check">
                              <input class="form-check-input" type="radio"  id="plumbing" name="plumbing" value="0" checked>
                              <label class="form-check-label" for="plumbing">
                                  Нет
                              </label>
                          </div>
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
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h5 class="panel-title" data-toggle="collapse" data-target="#collapseItem25">
                             Освещение + электрофурнитура
                         </h5>
                    </div>
                    <div id="collapseItem25" class="panel-collapse collapse">
                        <div class="panel-body">

                          <div class="form-check">
                              <input class="form-check-input" type="radio"  id="lightingElectricalAccessories" name="lightingElectricalAccessories" value="0" checked>
                              <label class="form-check-label" for="lightingElectricalAccessories">
                                  Нет
                              </label>
                          </div>
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
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h5 class="panel-title" data-toggle="collapse" data-target="#collapseItem26">
                             Мебель
                         </h5>
                    </div>
                    <div id="collapseItem26" class="panel-collapse collapse">
                        <div class="panel-body">

                          <div class="form-check">
                              <input class="form-check-input" type="radio"  id="furniture" name="furniture" value="0" checked>
                              <label class="form-check-label" for="furniture">
                                  Нет
                              </label>
                          </div>
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

                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h5 class="panel-title" data-toggle="collapse" data-target="#collapseItem27">
                             Бытовая техника
                         </h5>
                    </div>
                    <div id="collapseItem27" class="panel-collapse collapse">
                        <div class="panel-body">

                          <div class="form-check">
                              <input class="form-check-input" type="radio"  id="appliances" name="appliances" value="0" checked>
                              <label class="form-check-label" for="appliances">
                                  Нет
                              </label>
                          </div>
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
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h5 class="panel-title" data-toggle="collapse" data-target="#collapseItem28">
                             Генеральная уборка
                         </h5>
                    </div>
                    <div id="collapseItem28" class="panel-collapse collapse">
                        <div class="panel-body">

                          <div class="form-check">
                              <input class="form-check-input" type="radio"  id="springCleaning" name="springCleaning" value="0" checked>
                              <label class="form-check-label" for="springCleaning">
                                  Нет
                              </label>
                          </div>
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
                </div>

            </div> 

          </div>

      </div>

      <div class="col-md-12">

          <br>

          <button type="button" id="toCountConstructionCalculator" class="btn btn-success">Рассчитать стоимость</button>

          <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-3">

              <div class="form-group saveEmailWrap">
                  <!-- <label for="saveCCEmail">Email address</label> -->
                  <input type="email" class="form-control" name="email" placeholder="Ваш Email адрес" id="saveCCEmail" required="">
              </div>
              
            </div>
            <div class="col-md-3">
              
              <button type="button" id="sendConstructionCalculator" class="btn btn-success" disabled>Получить результаты</button>

            </div>
          </div>

          <br><br>

      </div>

      <div class="col-md-12" style=" overflow: scroll; ">

        <div id="timelineApartCalc" style="min-width: 1000px; height: 550px; margin: 0 auto 0px; overflow: scroll; display: none;"></div>

      </div>

    </div>

</form>
