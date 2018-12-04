<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <link rel="icon" href="App/Assets/img/src/marlon.ico" type="image/ico" sizes="20x20">
        <link href="https://fonts.googleapis.com/css?family=Lora|Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="App/Assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="App/Assets/css/mdb.min.css" rel="stylesheet">
        <link href="App/Assets/css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="loader-img">
            <div>
                <img src="App/Assets/img/src/marlon2.jpg" class="img1">
                <img src="App/Assets/img/src/loadf.gif" class="spin">
            </div>
        </div>
        <div class="Main">
       <!--Start menu-->
            <div class="sidebar sticky-top" >
                 <div class="view overlay zoom img-av">
                      <img class="" src="App/Assets/img/src/marlon.jpg" alt="Anaelmarlon luzayamo"  height="120px" width="100%" class="img-fluid" />
                      <div class="mask cursor flex-center waves-effect waves-light" data-toggle="modal" data-target="#marlonpicture" ></div>
                 </div>
                 <div class="slidebar-name left_Nom"></div>
                 <ul class="sidebar-menu-principal" id="navSrcollbar">
                      <li class="slidebar-menu"><a href="#home" class="home forsinghover" ><span class=" sliderbar-span  fa fa-home" aria-hidden="true"></span> <span class="sliderbar-span s-text " id="homeAJ"></span></a></li>
                      <li class="slidebar-menu"><a href="#aboutme" class="aboutme forsinghover" ><span class=" sliderbar-span  fa fa-user-circle-o " aria-hidden="true"></span> <span class="sliderbar-span s-text" id="aboutAJ"> </span></a></li>
                      <li class="slidebar-menu"><a href="#resume" class="education forsinghover" ><span class=" sliderbar-span  fa fa-address-card-o" aria-hidden="true"></span> <span class="sliderbar-span s-text" id="resumeAJ"> </span></a></li>
                      <!--≈<li class="slidebar-menu"><a href="#portefolio" class="portefolio forsinghover" ><span class=" sliderbar-span  fa fa-external-link" aria-hidden="true" ></span> <span class="sliderbar-span s-text" id="portfolioAJ"> </span></a></li>-->
                      <li class="slidebar-menu"><a href="#contact" class="contact forsinghover" ><span class=" sliderbar-span  fa fa-phone" aria-hidden="true"></span> <span class="sliderbar-span s-text" id="contactAJ"> </span></a></li>
                      <li class="slidebar-menu"><a href="#myproject" class="myproject forsinghover"><span class=" sliderbar-span  fa fa-angellist" aria-hidden="true"></span> <span class="sliderbar-span s-text " id="myprojectAJ"> </span></a></li>
                 </ul> 
                 <div class="lang">
                     <img src="App/Assets/img/src/fr.png" width="18px" height="18px" title="Français" data-target="fr">
                     <img src="App/Assets/img/src/es.png" width="18px" height="18px" title="Español" data-target="es"/>
                     <img src="App/Assets/img/src/ru.png" width="18px" height="18px" title="Руский" data-target="ru" />
                     <img src="App/Assets/img/src/en.png" width="18px" height="18px" title="English" data-target="en" />
                 </div>
                 <div class="slidebar-bottom" id="dateAndYear"></div>
            </div>
            <!--endMenu--> 
            <!--button toggle menu-->
            <span class="sidebar-navig"><i class="fa fa-navicon " aria-hidden="true"></i></span>
            <!--end toogle button-->
      
            <!--
                 */////////////////////////////////////////*
                ///     **--------------------**        ///
               ///  Start  Session content's System    ///
              ///     **--------------------**        ///
             */////////////////////////////////////////*
            -->
            <div class="content"> 
                  <!--start home-->
                  <section id="home">
                      <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 home-left">  
                              <div class="home-left-text">
                                  <div>
                                         <h4 id="greetingName"></h4>
                                         <h2 id="name"></h2>  
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div id="homeBottom">
                         <h4  id="homeBottom-onebyone"></h4>
                      </div>
                  </section>
                  <!--end home-->
          
                  <!--start aboutme-->
                  <section id="aboutme">
                      <div class="aboutmeHeader sticky-top">
      
                      </div>
                      <div class="aboutmeSession">
                          <span class="fa fa-3x fa-user-circle-o "></span>
                          <h1 id="aboutMeTitle"></h1>
                          <div id="aboutMedescription">
                          </div>
                     </div>
                      <div class="aboutmeHeader2">
     
                          <div class="aboutmeHeader2Title col-12"><span id="aboutmeHeader2TitleDiv"><span class="span" id="title1"></span></span></div>
                          <div class="container aboutmeHeader2Session2">
                             <div class="row">
                                  <div class="col-md-4 col-lg-3 col-sm-6 col-xs-6 bottom20">
                                        
                                       <div class="aboutmeHeader2FirstChild "><img src="App/Assets/img/src/web-dev.png"></div>
                                       <div class="aboutmeHeader2SecondChild "><h4 id="section1DivTitle"></h4></div>
                                       <div class="aboutmeHeader2ThirdChild " id="section1DivDescription"></div>
                                   
                                  </div>
                                  <div class="col-md-4 col-lg-3 col-sm-6 col-xs-6 bottom20">
                                         
                                        <div class="aboutmeHeader2FirstChild "><img src="App/Assets/img/src/mobile.png"></div>
                                        <div class="aboutmeHeader2SecondChild "><h4 id="section1DivMobile"></h4></div>
                                        <div class="aboutmeHeader2ThirdChild " id="section1DivMobileDescription"></div>
                                         
                                  </div>
                                  <div class="col-md-4 col-lg-3 col-sm-6 col-xs-6 bottom20">
                                         
                                        <div class="aboutmeHeader2FirstChild"><img src="App/Assets/img/src/dev-web.png"></div>
                                        <div class="aboutmeHeader2SecondChild "><h4 id="Development"></h4></div>
                                        <div class="aboutmeHeader2ThirdChild " id="DevelopmentDescription"></div>
                                          
                                  </div>
                                  <div class="col-md-4 col-lg-3 col-sm-6 col-xs-6 bottom20">
                                        
                                         <div class="aboutmeHeader2FirstChild "><img src="App/Assets/img/src/solution.png"></div>
                                         <div class="aboutmeHeader2SecondChild "><h4 id="Solution"></h4></div>
                                         <div class="aboutmeHeader2ThirdChild " id="SolutionDescription"></div>
                                       
                                  </div>
                             <!-- <div class="col-md-4 col-lg-3 col-sm-6 col-xs-6 bottom20">
                                         
                                         <div class="aboutmeHeader2FirstChild "><img src="img/src/electric.png"></div>
                                         <div class="aboutmeHeader2SecondChild "><h4>ELECTRICIAN</h4></div>
                                         <div class="aboutmeHeader2ThirdChild ">I have a better experience in installation and troubleshooting of electrical problems.</div>
                                         
                                  </div>-->
                             </div>
                         </div>
                         <div class="aboutmeHeader2Title col-12"><span id="aboutmeHeader2TitleDiv"><span class="span" id="howIdoIt"></span></span></div>
                         <div class="container">
                             <div class="row">
                                 <ul class="aboutmeUl">
                                     <li>
                                         <span><img src="App/Assets/img/src/discov.png"></span>
                                         <span id="discover"></span>
                                     </li>
                                     <li>
                                         <span><img src="App/Assets/img/src/research.png"></span>
                                         <span id="research"></span>                               
                                     </li>
                                     <li> 
                                          <span><img src="App/Assets/img/src/designs.png"></span><br>
                                          <span id="design"></span> 
                                     </li>
                                     <li>
                                         <span><img src="App/Assets/img/src/CODE.png"></span><br>
                                         <span id="develop"></span>
                                     </li>
                                     <li>
                                          <span><img src="App/Assets/img/src/test.png"></span><br>
                                          <span id="test"></span>
                                     </li>
                                     <li>
                                         <span><img src="App/Assets/img/src/support.png"></span><br>
                                         <span id="support"></span>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                         <div class="aboutmeHeader2Title col-12"><span id="aboutmeHeader2TitleDiv"><span class="span" id="title3"></span></span></div>
                         <div class="container">
                             <div class="row aboutmeHeaderFooter">
                                 <div class="col-sm-6 col-lg-3 col-md-4 col-xs-6 cup">
                                      <div class="row">
                                          <div class="col-3  cupHeader"><span class="fa fa-cogs fa-2x "></span></div>
                                          <div class="col-9 chan">
                                              <b id="section3Div1"></b>
                                          </div>
                                      </div>
                                 </div>
                                 <div class="col-sm-6 col-lg-3 col-md-4 col-xs-6 cup">
                                     <div class="row">
                                          <div class="col-3  cupHeader">
                                              <i  class="fa fa-certificate  fa-2x"  ></i>
                                          </div>
                                          <div class="col-9  chan">
                                                 <b id="section3Div2"></b>
                                          </div>
                                     </div>
                                 </div>
                                 <div class="col-sm-6 col-lg-3 col-md-4 col-xs-6 cup">
                                     <div class="row">
                                         <div class="col-3  cupHeader"><img src="App/Assets/img/src/emoticonetonant.gif" class="img-responsive" width="30px" height="30px"></div>
                                         <div class="col-9 chan">
                                              <b id="section3Div3"> <img src="App/Assets/img/src/emoticonjoie.gif" class="img-responsive" width="30px" height="30px"></b>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-sm-6 col-lg-3 col-md-4 col-xs-6 cup">
                                     <div class="row">
                                         <div class="col-3  cupHeader">
                                             <span class="fa fa-2x fa-coffee"></span>
                                         </div>
                                         <div class="col-9 chan">
                                            <b id="section3Div4"></b>
                                         </div>
                                     </div>
                                         
                                 </div>
                             </div>
                         </div>
                      </div>
                  </section>
                  <!--endaboutme-->
     
        
                  <!--start resume-->
     
                  <section id="resume">
                         <div class="resumeHeader">
                                 <span class="fa fa-3x fa-address-card-o "></span>
                                 <h1 id="resumeHeaderTitle">Resume</h1>
                         </div>
     
                         <div class="container resumeBody">
                             <div class="row">
                                 <div class="col-md-7 col-sm-12 resumeBodyLeft">
     
                                       <i class="fa fa-address-book-o s-i" aria-hidden="true"></i>
                                       <h5 id="title2">WORK HISTORY</h5>
     
                                       <span id="resumeBodyLefSelect">MARCH 2018 - CURRENT</span>
                                       <h6 id="resumeBodyLeftSelectTitle"> MANAGER OF DEVELOPERS WEB</h6>
                                       <h4 id="miniTitle1">HOTSHI</h4>
                                       <p id="miniSection1">
                                          Development of Web Applications,  and Problem documentation & solution shaping. 
                                          Tech Stack: MVC,PHP, MYSQL, Web API (REST),JSON, JQuery, AJAX, HTML5 , JavaScript, CSS (SASS),Bootstrap , CodeIgniter Framework ,  GIT, Ubuntu server, Design, Test and AWS2 -Amazon
                                       </p>
     
                                       <span id="secondTitle">MARCH 2014 - 2018</span>
                                       <h6 id="secondTitleMini"> FREELANCE SOFTWARE DEVELOPER</h6>
                                       <h4 id="miniSection2">HOME WORKER</h4>
                                       <p id="miniSection2">
                                          Development of Web Applications (forum ,Chat, NGO ...) and Development App windows desktop (personnel management system and sales management). 
                                          Tech Stack:  PHP, MVC,  JQuery, AJAX, HTML , JavaScript, CSS , Semantic UI , Bootstrap , CodeIgniter Framework , PASCAL (delphi and Embarcadero) and Wordpress.
                                       </p>
     
                                       <span id="thirdTitle">JUNE 2016 - SEPT 2016</span>
                                       <h6 id="thirdTitleMini"> CASHIER AND COOKER </h6>
                                       <h4 id="miniSection3">MACS-RESTAURANT/WISCONSIN DELLS</h4>
                                       <p id="miniSection3">
                                          Cooker and Cashier
                                       </p>
     
     
                                       <span id="fourthTitle">JULY 2016 - SEPT 2016</span>
                                       <h6 id="fourthTitleMini"> ARCADE ATTENDATE</h6>
                                       <h4 id="miniSection4">FAMILLY ENTERTAINMENT/WISCONSIN DELLS</h4>
                                       <p id="miniSection4">
                                        Assists patrons of amusement facility, and plays minor repairs on game machines.  Places out-of-order signs on defective machines and returns money lost in defective machines to patrons.
                                       </p>
     
                                       <span id="fifthTitle">MARCH 2010 - SEPT 2012</span>
                                       <h6 id="fifthTitleMini"> ELECTRICIAN OF BOAT </h6>
                                       <h4 id="miniSection5">CHANIMETAL/SOGEFMO</h4>
                                       <p id="miniSection5">
                                         Like a marine electrician , my  responsibility for the installation, repairing and maintenance of the electrical wiring systems on all kinds of marine vehicles like boats, yachts, and ships.
                                       </p><br><br>
       
     
                                       <i class="fa fa-graduation-cap s-i" aria-hidden="true"></i>
                                       <h5 id="resumeEducation">EDUCATION</h5>
     
                                       <span>2017 -  2018</span>
                                       <h6> MS DEGREE APPLY COMPUTER SCIENCE </h6>
                                       <h4>BELGOROD STATE AGRICULTURAL UNIVERSITY - RUSSIA</h4>
                                       <p>
                                        I started my computer science  degree at University of Belgorod State agricultural university in Belgorod - Russia before moving to United State of America. 
                                       </p>
     
     
                                       <span>2013 -  2017</span>
                                       <h6> BS DEGREE APPLY COMPUTER SCIENCE </h6>
                                       <h4>BELGOROD STATE AGRICULTURAL UNIVERSITY - RUSSIA</h4>
                                       <p>
                                          BASC in Economy focuses on the concepts and techniques used in the design and development of advanced software systems.
                                          I explored the conceptual underpinnings of Computer Science <br>
                                          <i>
                                              Majors: algorithms, programming languages, operating systems, and software engineering techniques. In addition, students choose from a rich set of electives that includes » data science, computer graphics, artificial intelligence, database systems, computer architecture, computer networks, Economics, Management among other topics
                                        </i>
                                       </p>
     
                                       <span>2004 -  2009</span>
                                       <h6> MATRICS (HIGH SCHOOL) in INDUSTRIAL ELECTRICAL </h6>
                                       <h4>INSTITUT TECHNIQUE ET INDUSTRIEL DE LA GOMBE - DRCONGO</h4>
                                       <p>
                                          High School matric (Grade12) : Industrial Electricity. 
                                          Major included but no limited: Electrical Engineering, Electronics, Mathematics, French, Hyper-frequency, Industrial mechanics, English and  Programation.
                                       </p><br><br>
     
                                       <i class="fa fa-certificate s-i" aria-hidden="true"></i>
                                       <h5>CERTIFICATES AND AWARDS</h5>

                                       <span>2013-2017</span>
                                       <h6>HONORS & AWARDS</h6>
                                       <h4>RUSSIA</h4>
                                       <p>
                                             <i>Leadership training,  Best Leader of Student self-government 2017, Best leader 2015,  Student of the year 2015, Certificate of Computer drawing compass 3d </i>
                                       </p>
     
                                       <span>11.5 H</span>
                                       <h6>XAMARIN C# / OIS AND ANDROID </h6>
                                       <h4>Udemy</h4>
                                       <p>
                                          I learned the C# language from scratch in order to create iOS and Android apps from the very beginning, until the publication in the store. <br>
                                          <i> I got the  master of techniques 's code sharing between  platforms with Xamarin.Forms  and be autonomous enough to integrate by yourself the features specific to your project.</i>
                                       </p>
     
                                       <span>37.5 H</span>
                                       <h6>COMPLETE TRAINING WEB DEVELOPER </h6>
                                       <h4>Udemy</h4>
                                       <p>
                                         I have been studying Web Development from A to Z. Learn HTML, CSS, Javascript, jQuery, Bootstrap, PHP, MySQL, Wordpress. <br>
                                         <i>We developed Website for Travel Agency, Snake Game, Online CV (Personal Website), Contact Form, Blog and E-commerce Website</i>
                                       </p>
     
                                       <span>6 H</span>
                                       <h6>DEVELOPER WORDPRESS </h6>
                                       <h4>Udemy</h4>
                                       <p>
                                           Learn the WordPress from beginner to professional.<br>
                                           <i>I developed a Blog, Vtrine Site, E-Commerce Website, etc ...
                                              Installed, configured, customized a WordPress site,
                                              Mastered the features of WordPress: Pages, Posts, Widgets, etc ...
                                              Optimized the referencing of a WordPress site thanks to the Yoast SEO plugin
                                              Sell products with the Woocommerce plugin</i>
                                       </p>
                                       
                                       <span>1.5 H</span>
                                       <h6>DEVELOPER CODEIGNITER </h6>
                                       <h4>Udemy</h4>
                                       <p>
                                             <i>I learned how to use CodeIgniter framework,  get
                                             good Knowledge of MVC concept,
                                             Making use to MVC under CodeIgniter.
                                             Integrate Bootstrap template into CodeIgniter
                                             How to easily create website using CodeIgniter.</i>
                                       </p>
                        
                                 </div><br/><br/>
     
                                 <!--Start Resume Right-->
     
                                 <div class="col-md-5 col-sm-12 resumeRight">
     
                                         <div class="resumeRightHeader col-12"><span class="resumeRightHeaderSpan "><span class="span">CODING SKILLS</span></span></div>
     
                                         <div class="resumeCoding">
     
                                               <div class="resumeCodingHeader"> 
                                                     <span>
                                                         <img width="25px" height="25px" src="App/Assets/img/src/php.png" alt="" class="img-responsive" alt="PHP" data-toggle="tooltip" data-placement="top" title="PHP">
                                                         <img width="28px" height="28px" src="App/Assets/img/src/sass.png" alt="" class="img-responsive add" data-toggle="tooltip" data-placement="top" alt="SASS" title="SASS">
                                                         <img width="28px" height="28px" src="App/Assets/img/src/css.png" alt="" class="img-responsive add2" data-toggle="tooltip" data-placement="top" alt="CSS" title="CSS">
                                                         <img width="28px" height="28px" src="App/Assets/img/src/html.png" alt="" class="img-responsive add3" data-toggle="tooltip" data-placement="top" alt="HTML" title="HTML">
                                                     </span>
                                                     <div class="resumeTubePhp"></div>
                                               </div>
     
                                               <div class="resumeCodingHeader"> 
                                                     <span>
                                                         <img width="25px" height="25px" src="App/Assets/img/src/sql.png" alt="" class="img-responsive" alt="SQL" data-toggle="tooltip" data-placement="top" title="SQL">
                                                     </span>
                                                     <div class="resumeTubeSql"></div>
                                               </div>
     
                                               <div class="resumeCodingHeader"> 
                                                     <span>
                                                         <img width="25px" height="25px" src="App/Assets/img/src/pascal.png" alt="" class="img-responsive" alt="PASCAL" data-toggle="tooltip" data-placement="top" title="PASCAL">
                                                     </span>
                                                     <div class="resumeTubePascal"></div>
                                               </div>
     
                                               <div class="resumeCodingHeader"> 
                                                     <span>
                                                         <img width="35px" height="35px" src="App/Assets/img/src/js.png" alt="" class="img-responsive" alt="JAVASCRIPT" data-toggle="tooltip" data-placement="top" title="JAVASCRIPT">
                                                     </span>
                                                     <div class="resumeTubeJS"></div>
                                               </div>
                                               <div class="resumeCodingHeader"> 
                                                    <span>
                                                        <img width="35px" height="35px" src="App/Assets/img/src/json.png " alt="" class="img-responsive" alt="JSON" data-toggle="tooltip" data-placement="top" title="JSON">
                                                    </span>
                                                    <div class="resumeTubeJSON"></div>
                                              </div>
                                               <div class="resumeCodingHeader"> 
                                                    <span>
                                                        <img width="35px" height="35px" src="App/Assets/img/src/api.png " alt="" class="img-responsive" alt="API" data-toggle="tooltip" data-placement="top" title="API">
                                                    </span>
                                                    <div class="resumeTubeAPI"></div>
                                              </div>
                                              <div class="resumeCodingHeader"> 
                                                    <span>
                                                        <img width="35px" height="35px" src="App/Assets/img/src/react.png " alt="" class="img-responsive" alt="API" data-toggle="tooltip" data-placement="top" title="REACT">
                                                    </span>
                                                    <div class="resumeTubeReact"></div>
                                              </div>
     
                                               <div class="resumeCodingHeader"> 
                                                     <span>
                                                         <img width="35px" height="35px" src="App/Assets/img/src/xamarin.png " alt="xamarin" class="img-responsive" alt="XAMARIN" data-toggle="tooltip" data-placement="top" title="XAMARIN">
                                                     </span>
                                                     <div class="resumeTubeXamarin"></div>
                                               </div>
                                               <div class="resumeCodingHeader"> 
                                                    <span>
                                                        <img width="35px" height="35px" src="App/Assets/img/src/csharp.png " alt="" class="img-responsive" alt="API" data-toggle="tooltip" data-placement="top" title="C#">
                                                    </span>
                                                    <div class="resumeTubeCsharp"></div>
                                              </div>
                                               <div class="resumeCodingHeader"> 
                                                    <span>
                                                        <img width="35px" height="35px" src="App/Assets/img/src/java.png " alt="" class="img-responsive" alt="API" data-toggle="tooltip" data-placement="top" title="JAVA">
                                                    </span>
                                                    <div class="resumeTubeJava"></div>
                                              </div>

                                         </div><br/><br/>

                                         <div class="resumeRightHeader col-12"><span class="resumeRightHeaderSpan "><span class="span">OTHERS</span></span></div>
                                         <div>Codeigniter, Wordpress, GIT, MVC, Photoshop, Ubuntu server, EC2 Aws Amazon, Microsoft office, Visual studio, GIMP , Program 1C (program accounting), Node, Yarn, Ubuntu terminal, PostSql  </div><br/><br/>

                                         <div class="resumeRightHeader col-12"><span class="resumeRightHeaderSpan "><span class="span">TESTIMONIALS</span></span></div>
                                         <div class="resumeOthers">
                                                <img width="80px" height="80px" src="App/Assets/img/src/marlon2.jpg" alt="" class="img-responsive" alt="API" data-toggle="tooltip" data-placement="top" title="Pierrette">
                                                <br/>
                                                <div>
                                                    <div class="resumeOthersHeader">Seth Jones</div>
                                                    <div class="resumeOthersDetails">SOFTWARE DEVELOPER / GRAVITY INC.</div><br/>
                                                    <div class="resumeOthersBody">Jude was a very professional and friendly colleague. He handles his work efficiently, works well within a team and independently. He is an innovative thinker and for anyone who has ever worked with Jude, it quickly becomes clear that Jude can run with the best in his field. He is extremely knowledgeable and cares about his work.</div>
                                                </div>
                                         </div><br/><br/>

                                         <div class="resumeOthers">
                                                <img width="80px" height="80px" src="App/Assets/img/src/marlon2.jpg" alt="" class="img-responsive" alt="API" data-toggle="tooltip" data-placement="top" title="Pierrette">
                                                <br/>
                                                <div>
                                                    <div class="resumeOthersHeader">Seth Jones</div>
                                                    <div class="resumeOthersDetails">SOFTWARE DEVELOPER / GRAVITY INC.</div><br/>
                                                    <div class="resumeOthersBody">Jude was a very professional and friendly colleague. He handles his work efficiently, works well within a team and independently. He is an innovative thinker and for anyone who has ever worked with Jude, it quickly becomes clear that Jude can run with the best in his field. He is extremely knowledgeable and cares about his work.</div>
                                                </div>
                                         </div>
     
                                 </div>
                             </div>
                         </div>
                  </section>
                  <!--end education-->
                   
                  <!--start portefolio
                  <section id="portefolio">
          
                  </section>
                  end portefolio-->
                  
                  <!--startcontact-->
                  <section id="contact">
                      <div id="div">
                            <div class="contactHeader">
                                <span class="fa fa-3x fa-phone "></span>
                                <h1>- Contact me -</h1>
                            </div><br/><br/>
                            <div class="contactMainHeader col-12"><span class="contactMainHeaderSpan "><span class="span">LET'S SOCIALIZE</span></span></div>
                            <div class="ContactPortefolio">
                                <a href="https://www.facebook.com/anaelmarlon" id="facebook"><img src="App/Assets/img/src/facebook.png" target="_blank" width="25px" height="25px"/></a>
                                <a href="https://github.com/amarlon" id="github"><img src="App/Assets/img/src/github.png" target="_blank" width="25px" height="25px"/></a>
                                <a href="mailto:marlonluzayamo@gmail.com" id="google"><img src="App/Assets/img/src/google.png" target="_blank" width="25px" height="25px"/></a>
                                <a href="https://www.linkedin.com/in/anaelmarlon-luzayamo-ngweni-5b20b6156/" id="linkedin"><img src="App/Assets/img/src/linkedin.png" target="_blank" width="20px" height="20px"/></a>
                                <a  id="skype"><img src="App/Assets/img/src/skype.png" target="_blank" width="20px" height="20px"/></a>
                                <a href="https://codepen.io/anaelmarlon-marlon-luzayamo/"  target="_blank" id="codepen"><img src="App/Assets/img/src/codepen.png" width="20px" height="20px"/></a>
                                <a href="https://vk.com/luzayamo"  target="_blank" id="vk"><img src="App/Assets/img/src/vk.png" width="20px" height="20px"/></a>
                                <div id="avtarSocial">
                                     <div class="div">
                                         <img src="App/Assets/img/src/marlon2.jpg" width="100%" height="140px"/>
                                         <h5 id="copyT">Id: anael.luzayamo1</h5>
                                     </div>
                                </div>
                            </div><br/><br/>

                            <div class="contactMainHeader col-12"><span class="contactMainHeaderSpan "><span class="span">GET HOLD OF ME</span></span></div>
                            <div class=" container contactTel">
                                <div class="row">
                                    <div class="col-md-3 cHeader">
                                        <center><a href=""><img src="App/Assets/img/src/localisation.png" height="30px"/>
                                        <h6>BASED IN GRAND RAPIDS/MICHIGAN</h6></a></center>
                                    </div>
                                    <div class="col-md-3 cHeader">
                                        <center><a href=""><img src="App/Assets/img/src/phone.png" height="30px"/>
                                        <h6>TEL : +16165897997</h6></a></center>
                                    </div>
                                    <div class="col-md-3 cHeader">
                                        <center><a href=""><img src="App/Assets/img/src/mail.png" height="30px"/>
                                        <h6>MAIL : marlonluzayamo@gmail.com and marlonluzayamo@hotmail.fr</h6></a></center>
                                    </div>
                                    <div class="col-md-3 cHeader">
                                        <center><a href=""><img src="App/Assets/img/src/mess.png" height="30px"/>
                                        <h6>WHATSAPP: +16165897997</h6></a></center>
                                    </div>
                                </div>

                            </div><br/><br/>
                            <div class="contactMainHeader col-12"><span class="contactMainHeaderSpan "><span class="span">DROP ME A LINE</span></span></div><br/>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 m-auto">
                                    <form id="FormNew">
                                        <div class="md-form input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text md-addon text-light" id="inputGroupMaterial-sizing-sm">NAME</span>
                                            </div>
                                            <input type="text" id='first' required class="form-control text-light" aria-label="name" name="_first" aria-describedby="inputGroupMaterial-sizing-sm">
                                        </div>

                                        <div class="md-form input-group input-group-sm mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text md-addon text-light" id="inputGroupMaterial-sizing-sm">PHONE</span>
                                                </div>
                                                <input type="text" id="phone" class="form-control text-light" aria-label="name" name="_phone" aria-describedby="inputGroupMaterial-sizing-sm">
                                        </div>
                                                  
                                        <div class="md-form input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text md-addon text-light" id="inputGroupMaterial-sizing-default">MAIL</span>
                                            </div>
                                            <input type="email" id="email" required class="form-control text-light text-light" aria-label="mail" name="_mail" aria-describedby="inputGroupMaterial-sizing-default">
                                        </div>
                                                  
                                        <div class="md-form amber-textarea active-amber-textarea-2">
                                            <i class="fa fa-pencil prefix text-light"></i>
                                            <textarea required type="text" id="form24" class="md-textarea form-control text-light" rows="3" name="_text"></textarea>
                                            <label for="form24" class="text-light">MESSAGE</label>
                                        </div>
                                        <div class="alert alert-success messageResponse text-center" role="alert">
                                            <p id="messText"></p>
                                        </div>
                                        <br/>
                                        <button type="submit" class="btn btn-primary mr-auto float-right systemSubmit">SEND <span><img class="specialReponse" src="App/Assets/img/src/loader.gif" width="35px" height="35px"/></span></button>
                                    </form>
                                </div>
                            </div>
                      </div>
                  </section>
                  <!--end contact-->
          
                  <!--Start myproject-->
                  <section id="myproject">

          
                  </section>
                  <!--end myproject-->
         
            </div>
            <!--  
     
                *\**************8888***************\*
                 *\***   End content session     ***\* 
                  *\*************8888****************\*    

            -->
     
            <!-- Modal pour marlon picture-->
            <div class="modal fade" id="marlonpicture" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content img-marlon">
                         <img src="App/Assets/img/src/marlon.jpg" width='100%' height='100%' class="responsive">
                    </div>
                </div>
            </div>
        </div>
    <!-- Modal -->
        <script type="text/javascript" src="App/Assets/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="App/Assets/js/popper.min.js"></script>
        <script type="text/javascript" src="App/Assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="App/Assets/js/mdb.min.js"></script>
        <script type="text/javascript" src="App/Assets/js/main.js"></script>
        <script type="text/javascript" src="App/Assets/js/lang.js"></script>
    </body>
<!--il me reste le certificast-->
</html>
