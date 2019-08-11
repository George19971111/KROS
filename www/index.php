<!doctype html>
<html lang="en" ng-app="newApp">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.js"></script>
    <title>Baraholkakrossovki</title>
  </head>
  <body ng-controller="newController">

          <header class="headclasss">
            <div class="container-fluid">
              <div class="row">

           <div class="img1">
              <img  src="img/1.png">
              </div>
              <nav class="navigation1">
              
                  <ul id="menu">
                   <div> <li><a href="#accordion12">OUr collection</a></li></div>
                    <div class="meniotem"> <li><a class="link1"  href="#tq12qa">Where we work</a></li></div>
                     <div class="meniotem"> <li><a href="#opq1ammm">Sales leaders</a></li></div>
                      <div class="meniotem"><li><a href="#carousel">brands</a></li></div>
                     

                  </ul>
              </nav>
              <div class="divleftmarg">
                
         <div><div href="" id="yolo12"> <div class="nex1"><div><img  src="img/2.png"></div> <p class="text1">SEARCH</p></div></div><input id="next31" class="form-control" type="text" name="text" ng-model="juery1"></div>
         <a href=""> <div class="nex1"><div><img src="img/3.png"></div> <span class="text1">CART</span></div></a>
         <a href="" class="navitema12" data-toggle="modal" data-target="#llooplllp"> <div class="next2"><div><img src="img/4.png"></div> <span class="text1">SIGN IN</span></div></a>
              <div class="modal fade" id="llooplllp" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="mylayaut"> 
                <div class="modal-dialog" style="margin-top:200px; border-radius:0" role="document">
                  <div class="modal-content" style="border-radius: 0; border:2px solid #0089cf;">
                    <button style="margin-left:auto;" class="close" aria-label="close" data-dismiss="modal">
                      <span aria-hidden="true"><img width="25" style="margin-top:10px; margin-right: 10px" src="img/25.png"></span>
                      
                    </button>  
                    <ul class="nav nav row iiiii12" id="Mytablist1" role="tablist">
                      <li class="nav-item"><a class="nav-link active" id="phone-tab" href="#phone" role="tab" data-toggle="tab" aria-controls="phone" aria-selected="true"><button class="btn btn-dark">REGISTRATION</button></a></li>
                        <li class="nav-item assdwqq"><a class="nav-link" id="telephon-tab" href="#telephon" role="tab" data-toggle="tab" aria-controls="telephon" aria-selected="false"><button class="btn btn-dark">SIGN IN</button></a></li>
                      
                    </ul>
                      <div class="tab-content" id="Myucontent">
                        <div class="tab-pane fade show active" id="phone" role="tabpanel" aria-labelledby="phone-tab">
                          <form class="form form12" id="newformaforevar" no validate>
                            
                             <input id="emailvalid" type="email" name="email" class="form-control" placeholder="Email"><img class="heyguyyyq" style="float: right;" width="10" src="img/26.png">
                             <input id="passwordvalid" type="password" name="password" class="form-control" placeholder="Your password"><img class="heyguyyyq" style="float: right;" width="10" src="img/26.png">
                              <input type="password" id="passwordvalid1" name="password" class="form-control" placeholder="Repeat your password"><img class="heyguyyyq" style="float: right;" width="10" src="img/26.png">
                              <div class="temaaszi">
                              <button class="btn btn-dark" id="buttonforregister"  >Registrate</button>
                              <button class="btn btn-dark ppp" data-dismiss="modal">Close</button>
                            </div>
                          </form>


                        </div>

                         <div class="tab-pane fade" id="telephon" role="tabpanel" aria-labelledby="telephon-tab">
                             <form class="form form12">
                            
                             <input type="email" name="email" class="form-control" placeholder="Email">
                             <input type="password" name="password" class="form-control" placeholder="Your password">
                             
                              <div class="temaaszi1">
                              <center><button class="btn btn-dark " type="submit">SIGN</button></center>
                             
                            </div>
                          </form>


                         </div>
                        
                      </div>

                  </div>
                  

                </div>
              

            </div>
        </div>
    
      </div>
      </div>
          </header>
    

          <section class="sectiontovar">
            <div class="inside">
          <div class="container-fluid">
            <div class="row tutu" ng-repeat="mass in massive | filter:juery1">
              <div class="col-xs-6 uuu1">
                <img  ng-src="{{mass.img}}">
              </div>
              <div class="col-xs-4 uuu1" id="opq1ammm">
                <p class="textangular">{{mass.name}}</p>
                <p class="textangular1">{{mass.oppicanie}}</p>
                <p class="textangular2">{{mass.kolvo}}</p>
               
               <a href=""><button  data-toggle="modal" data-target="#modalopen1"  class="btn btn-dark textangular3">{{mass.buttonname}}</button></a>
               <div class="modal fade" id="modalopen1" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="modalmyname">
                <div class="modal-dialog" role="document"style="width: 1000px; margin-top:200px; max-width: 100%;">
                <div class="modal-content" style=" background-color:rgba(0,0,0,.3);border-radius:0; height: 600px; padding-top:120px">
                        <div id="carousel" data-ride="carousel" class="carousel slide d-inline-block">
                          <div class="carousel-inner itsme12" >
                            <div class="carousel-item active" >
                             <center  class="heyguys"> <img src="img/5.png"></center>
                            </div>
                            <div class="carousel-item " ng-repeat="die in massive2">
                              <center clas="heyguys"><img  ng-src="{{die.img}}"></center>
                            </div>

                            
                          </div>
                          <a href="#carousel" data-slide="prev" class="carousel-control-prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span sr-only="prev"></span>
                          </a>
                           <a href="#carousel" data-slide="next" class="carousel-control-next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span sr-only="next"></span>
                          </a>
                        </div>

                      </div>
                </div>
          </div>
              </div>
          
      
            </div>    
            <p class="title12">ALL TIPE OF BOOTS {{(massive| filter:juery1).length}}</p>
            </div>
          </div>
          </section>
 
     
  
                <div id="accordion" class="cetxtrion" aria-multiselectable="true" role="tablist">
                  <div class="panel panel-defautl">
                    <div class="panel-heading" role="tab" id="headpanel">
                     <h4 class="panel-title">
                      <button data-toggle="collapse"  id="accordion12"  data-parent="#accordion" href="#taabbb12" aria-controls="taabbb12" aria-expanded="true"  class="btn btn-dark textangular3">OPEN ALL COLLECTION</button>
                        </h4>
                      
                      
                    </div>
                   <div id="taabbb12" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headpanel">


                      <!-- tablist -->
                      <div class="container-fluid">
                       <ul class="nav nav wid123 row" container-fluid" id="Mytablist" role="tablist">
                      <li class="col-xs-4 tutu1" class="nav-item"><a class="nav-link active" id="home-tab" href="#home" role="tab" data-toggle="tab" aria-contorols="home" aria-selected="true"><button class="btn btn-dark textangular4">NIKE</button ></a></li>
                       
                        <li class="col-xs-4 tutu1" class="nav-item"><a class="nav-link" id="room-tab" href="#room" role="tab" data-toggle="tab" aria-contorols="room" aria-selected="false"><button class="btn btn-dark textangular4">Adidas</button></a></li>
                       
                         <li class="col-xs-4 tutu2" class="nav-item"><a class="nav-link" id="hach-tab" href="#hach" role="tab" data-toggle="tab" aria-contorols="hach" aria-selected="false"><button class="btn btn-dark textangular4">PUMA</button></a></li>



                          

                       </ul> 
                      </div>
                 
                      <div class="tab-content" id="Mytabcontent"> 
                              <div class="tab-pane fade show active" id="home" aria-labelledby="home-tab" role="tabpanel">
                                <div class="container-fluid">
                                  <div class="container-fluid">
                                  <div class="row">
                                   <input placeholder="Search type of NIKE"  class="form-control yyqw2" type="" name="" ng-model="type12">
                                    <div class="divsortiv" ng-click="sort('cost')"><a href="">SORTIROVAT {{(massive1 | filter:type12).length}}</a></div>
                                  </div>
                                </div>
                               <div class="row">
                                    
                                   <div class="col-xs-4 divkrosovok" ng-repeat="kill in massive1 |orderBy:SortFile:reverse | filter:type12">
                                    <p class="text3">{{kill.name}}</p>
                                    <p class="text4">{{kill.oppicanie}}</p>
                                    <p class="text5">{{kill.Sveta}}</p>
                                    <center class="text6"> <img ng-src="{{kill.img}}"> </center>
                                    <div class="text9">
                                    <p class="text7">{{kill.naski}}</p>
                                     <p class="text8">{{kill.cost}}</p>
                                   </div><br>
                                    <div class="row text10">
                                      <div class="dropdown-open">
                                      <button class="btn btn-light text11 dropdown-toggle" id="newmeta" role="button" data-toggle="dropdown" aria-expended="false" aria-hospopup="true">SIZE</button>
                                      <div class="dropdown-menu" aria-labelledby="newmeta">
                                        <a  class="dropdown-item u12 ">{{kill.razmer1}}</a>
                                         <a  class="dropdown-item u12">{{kill.razmer2}}</a>
                                          <a  class="dropdown-item u12">{{kill.razmer3}}</a>
                                      </div>
                                     </div>
                                      <button class="btn btn-dark text12">add to cart</button>
                                    </div>
                                    </div>
                               </div>
                                 <p class="title12">ALL TIPE OF BOOTS {{(massive1 | filter:type12).length}}</p>
                                </div>
                              </div>


                                <div class="tab-pane fade" id="room" aria-labelledby="room-tab" role="tabpanel">
                                  <div class="container-fluid">
                                  <div class="container-fluid">
                                  <div class="row">
                                   <input placeholder="Search type of NIKE"  class="form-control yyqw2" type="" name="" ng-model="type12">
                                    <div class="divsortiv" ng-click="sort('cost')"><a href="">SORTIROVAT {{(massive1 | filter:type12).length}}</a></div>
                                  </div>
                                </div>
                               <div class="row">
                                    
                                   <div class="col-xs-4 divkrosovok" ng-repeat="kill in massive1 |orderBy:SortFile:reverse | filter:type12">
                                    <p class="text3">{{kill.name}}</p>
                                    <p class="text4">{{kill.oppicanie}}</p>
                                    <p class="text5">{{kill.Sveta}}</p>
                                    <center class="text6"> <img ng-src="{{kill.img}}"> </center>
                                    <div class="text9">
                                    <p class="text7">{{kill.naski}}</p>
                                     <p class="text8">{{kill.cost}}</p>
                                   </div><br>
                                    <div class="row text10">
                                      <div class="dropdown-open">
                                      <button class="btn btn-light text11 dropdown-toggle" id="newmeta" role="button" data-toggle="dropdown" aria-expended="false" aria-hospopup="true">SIZE</button>
                                      <div class="dropdown-menu" aria-labelledby="newmeta">
                                        <a  class="dropdown-item u12 ">{{kill.razmer1}}</a>
                                         <a  class="dropdown-item u12">{{kill.razmer2}}</a>
                                          <a  class="dropdown-item u12">{{kill.razmer3}}</a>
                                      </div>
                                     </div>
                                      <button class="btn btn-dark text12">add to cart</button>
                                    </div>
                                    </div>
                               </div>
                                 <p class="title12">ALL TIPE OF BOOTS {{(massive1 | filter:type12).length}}</p>
                                </div>




                                </div>

                                 <div class="tab-pane fade" id="hach" aria-labelledby="hach-tab" role="tabpanel">
                                   <div class="container-fluid">
                                  <div class="container-fluid">
                                  <div class="row">
                                   <input placeholder="Search type of NIKE"  class="form-control yyqw2" type="" name="" ng-model="type12">
                                    <div class="divsortiv" ng-click="sort('cost')"><a href="">SORTIROVAT {{(massive1 | filter:type12).length}}</a></div>
                                  </div>
                                </div>
                               <div class="row">
                                    
                                   <div class="col-xs-4 divkrosovok" ng-repeat="kill in massive1 |orderBy:SortFile:reverse | filter:type12">
                                    <p class="text3">{{kill.name}}</p>
                                    <p class="text4">{{kill.oppicanie}}</p>
                                    <p class="text5">{{kill.Sveta}}</p>
                                    <center class="text6"> <img ng-src="{{kill.img}}"> </center>
                                    <div class="text9">
                                    <p class="text7">{{kill.naski}}</p>
                                     <p class="text8">{{kill.cost}}</p>
                                   </div><br>
                                    <div class="row text10">
                                      <div class="dropdown-open">
                                      <button class="btn btn-light text11 dropdown-toggle" id="newmeta" role="button" data-toggle="dropdown" aria-expended="false" aria-hospopup="true">SIZE</button>
                                      <div class="dropdown-menu" aria-labelledby="newmeta">
                                        <a  class="dropdown-item u12 ">{{kill.razmer1}}</a>
                                         <a  class="dropdown-item u12">{{kill.razmer2}}</a>
                                          <a  class="dropdown-item u12">{{kill.razmer3}}</a>
                                      </div>
                                     </div>
                                      <button class="btn btn-dark text12">add to cart</button>
                                    </div>
                                    </div>
                               </div>
                                 <p class="title12">ALL TIPE OF BOOTS {{(massive1 | filter:type12).length}}</p>
                                </div>


                                 </div>
                           </div>
                    
                   </div>  
                  </div>
                </div>
               
               
                <section class="teory">
                  <div class="carousel slide d-inline-block" id="carousel" data-ride="carousel" style="width: 1380px; margin:0 auto; max-width: 100%;">
                    <div class="carousel-inner">
                      <div class="carousel-item active classicaksex">
                        <div class="divfortext">
                          <div class="container-fluid">
                          <p class="text123">CLASSIC CUSHIONING. MODERN COMFORT.</p>
                          <p class="text4123">The Nike Air Max Tavas SD Men's Shoe recalls the profile of the iconic running<br> original with a Max Air unit in the heel and multi-surface Waffle outsole.<br> A lightweight upper and gradient detail offer a comfortable fit and dynamic look.</p>

                          </div>
                        </div>
                      </div>
                                              
                    </div>
                    
                    <a href="#carousel" data-slide="prev" role="button" class="carousel-control-prev">
                      <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                      <span sr-only="prev"></span>
                    </a>
                       <a href="#carousel" data-slide="next" role="button" class="carousel-control-next">
                      <span aria-hidden="true" class="carousel-control-next-icon"></span>
                      <span sr-only="next"></span>
                    </a>

                  </div>
                </section>
                <aside class="mezdometie">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-xs-3 uuu1f">
                        <center><img src="img/15.png" width="250" height="150"></center>
                        <p class="text100">In no impression assistance contrasted. Manners she wishing justice hastily new anxious.</p>
                      </div>
                       <div class="col-xs-3 uuu1f">
                        <center><img src="img/16.png" width="250"  height="150"></center>
                        <p class="text100">In no impression assistance contrasted. Manners she wishing justice hastily new anxious.</p>
                      </div>
                       <div class="col-xs-3 uuu1f">
                        <center><img src="img/17.png" width="250" height="150"></center>
                        <p class="text100">In no impression assistance contrasted. Manners she wishing justice hastily new anxious.</p>
                      </div>
                      

                    </div>
                    
                  </div>

                </aside>


                  
                   <a href=""><img id="photoses" class="navigarttwq1" width="30" src="svg/arrowtop.svg"></a>
                  





                <section class="divfortext1" id="tq12qa" >
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d186087.89533589667!2d76.80408263680987!3d43.21738845619771!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836e7d16c5cbab%3A0x3d44668fad986d76!2z0JDQu9C80LDRgtGL!5e0!3m2!1sru!2skz!4v1539540316531" width="1380" height="450" frameborder="0"  style="border:0; max-width: 100%;" allowfullscreen></iframe>
                </section>



                <footer class="foterfoterok bg-dark">
                <div class="container-fluid">
                   <div class="wi12ath">
                   <div class="row">

                     <div class="col-xs-4">
                       <center class="logoinfooter"><img src="img/1.png"></center>
                     </div>
                     <div class="col-xs-4 uui1u2">
                        <p class="text2000">ALL RULES PROTECTED &copy; <?php echo date ('Y')?><br> <p class="text20001">DESIGN BY GEORGE</p> </p>
                     </div>
                     <div class="col-xs-4">
                       
                     </div>
                   </div> 
                 </div>

                </div>
                </footer>





















    <script src="https://code.jquery.com/jquery-3.3.1.min.js"  crossorigin="anonymous"></script>
    <script src="js/jquery.lazylinepainter-1.7.0.min.js"></script>
    <script src="js/main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>