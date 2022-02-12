<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP learning</title>
    <link rel="icon" href="image/small_logo.jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    </head>
<body style="background-color: skyblue; text-align: center; " >
    <div class="container">
        <div class="row">
            <div class="col mt-4 ">
                <h1 style="color: blue;" >PHP սկսնակների համար</h1>
            </div>
        </div>
        <div class="row">
            <div class="col mt-5">
                 <img src="https://laravelnews.imgix.net/images/phplogo.jpg?ixlib=php-3.3.1" alt="PHP logo" class="img-fluid" >
            </div>
        </div>
        <div class="row">
            <div class="col mt-5">
                <h2 style="color: blue;" >Ի՞նչ է PHP-ին </h2>  <hr style="color: blue;" > 
            </div>
        </div>
        <div class="row">
            <div class="col">
                <br> 
                <strong>
                    PHP-ն (անգլ.՝ PHP: Hypertext Preprocessor) ընդհանուր նշանակության սկրիպտային ծրագրավորման լեզու է, որն ինտենսիվորեն օգտագործվում է վեբ ծրագրավորման մեջ։ Ներկայումս այն աջակցվում է հոսթինգ տրամադրող ընկերությունների ճնշող մեծամասնության կողմից և հանդիսանում է առաջատար ծրագրավորման լեզուներից մեկը, որոնք կիրառվում են դինամիկ վեբ-կայքերի ստեղծման համար։

                   Լեզուն և իր ինտերպրետատորը մշակվում են մի խումբ էնտուզիաստների կողմից բաց կոդով նախագծի շրջանակներում։ Նախագիծը տարածվում է սեփական արտոնագրով, որն անհամատեղելի է GNU GPL-ի հետ։
                </strong>
            </div>
        </div>
        <div class="row">
            <div class="col mt-5 ">
                <h1 style="color: blue;" >Անցնենք սովորելուն </h1>  <hr style="color: blue;" >
            </div> 
        </div>
        <div class="row">
            <div class="col mt-5">
                <h3 style="color:blue;" > 1.Ինչպես օգտագործել </h3> <br>
            </div>
            <div class="col mt-4 ">
             <strong>
                Առաջինը պետք է ընտրել ծրագիրը որով ցանկանում եք աշխատել : Խորհուրդ եմ տալիս օգտվել Visual Studio Code ծրագրից ( <a href="https://code.visualstudio.com/" target="_blank" style="color:blue;" >Visual Studio Code</a>) :  Մուտք գործելուց հետո ստեղծել նոր ֆայլ :  Այնուհետև ընտրել "PHP" :    <br> "Head" - Կայքի վերևի հատվածը:
                <br> "Body"- Կայքի այն հատվածը որտեղ կատարվում է աշխատանքը: <br> "Footer" - Կայքի ներքևի հատվածը: 
                <br> Շատ կարևոր է ցանկացած փոփոխություն կատարելուց հետո սեղմել Ctrl+S :
             </strong>
            </div>
        </div> <hr style="color: darkslateblue;" >
        <div class="row">
            <div class="col mt-4">
                <h3 style="color: blue;" >2.Սկիզբ</h3>
            </div>
            <div class="col mt-4 ">
                <strong>
                    Կոդը սկսելու համար հարկավոր է օգտագործել &lt?php հրամանը այնուհետև գրել ?> : Իսկ կոդը գրել նրանց մեջտեղում: 
                    PHP-ում կատարած աշխատանքը տեսնելու համար հարկավոր է ՝ առաջինը ներբեռնել (Խորհուրդ եմ տալիս  <a href="https://www.usbwebserver.net/webserver/"target="_blank" style="color: blue;" >usbwebserver</a>): Ձեր նախագծերը ստեղծել'root' թղթապանակում: Usbwebserver-ում ընտրել Local Host: Այնտեղ կհայտնվեն ձեր ստեղցած նախագծերը:  
                </strong>
            </div>
        </div>  <hr style="color: darkslateblue;" >
        <div class="row">
            <div class="col mt-5 ">
                   <h3 style="color: blue;" >3.Տեքստ</h3>
            </div>
            <div class="col mt-4 ">
                <strong>
                    Տեքստը PHP-ում գրում ենք echo հրամանով: Տեքստը գրելով "չակերտների" մեջ։  <br>
              
                </strong>  
            </div>
        </div>  <hr style="color: darkslateblue;" >
        <div class="row">
            <div class="col mt-5">
                <h3 style="color: blue;">4.Փոփոխականներ </h3> 
            </div>
            <div class="col mt-4 ">
                <strong>
                Երբեմն հարմար է փոփոխականների անուններ ունենալ որպես փոփոխական։ Այսինքն՝ փոփոխականի անուն, որը կարելի է դինամիկ կերպով սահմանել և փոխել։ Սովորական փոփոխականը սահմանվում է այսպես. <br>
                &lt;?php
                $a = 'hello';
                ?&gt;
            </strong>
            </div>
        </div> <hr style="color: darkslateblue;" >
        <div class="row">
            <div class="col">
                <h3 style="color: blue;">5. Զանգված</h3> 
            </div>
            <div class="col mt-4 ">
        <strong>
            Զանգվածը պահպանում է բազմաթիվ արժեքներ մեկ փոփոխականում. <br>
            &lt;?php
            $cars = array("Volvo", "BMW", "Toyota");
            echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
             ?&gt;
        </strong>
            </div>
        </div> <hr style="color: darkslateblue;" >
        <div class="row">
            <div class="col">
                <h3 style="color: blue;">6.Պայմանական հայտարարություններ</h3> 
            </div>
       
        <div class="col mt-4 ">
             <strong>
                Պայմանական հայտարարություններն օգտագործվում են տարբեր պայմանների հիման վրա տարբեր գործողություններ կատարելու համար: <br>
                if - գործարկել որոշ կոդ, եթե մի պայման ճիշտ է: <br>
                if...else - կատարում է որոշ կոդ, եթե պայմանը ճիշտ է, և մեկ այլ կոդ, եթե այդ պայմանը սխալ է : <br> <br> 
                if (condition) { <br>
                    կոդը, որը պետք է կատարվի, եթե պայմանը ճշմարիտ է.
                } <br>
                if (condition) { <br>
                    կոդը, որը պետք է կատարվի, եթե պայմանը ճշմարիտ է. <br>
                  } else { <br>
                    կոդը, որը պետք է կատարվի, եթե պայմանը կեղծ է.
                  } <br>
                  
             </strong>
        </div>
        </div> <hr style="color: darkslateblue ;" >

        <div class="row">
            <div class="col mt-3  ">
                <h3 style="color: blue; text-align: center; " > Շնորհավորում եմ դուք արդեն ունեք PHP-ի մասին սկզբնական գիտելիքներ </h3>
            </div>
        </div>
        <hr style="color: black;" >
        <div class="col">
            <div class="row">
             <div class="col-lg-6 mt-5 mb-5  " style="color: darkseagreen;" >
                 <a href="index" class="btn btn-dark btn-lg" style="width: 100%; color: white; " >Programming</a>
             </div>
             <div class="col-lg-6  mt-5 mb-5 ">
                 <a href="html" class="btn btn-dark btn-lg" style="width: 100%; color: white; " >HTML</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>   
</body>
</html>