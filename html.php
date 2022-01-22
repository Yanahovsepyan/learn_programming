<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML learning</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body style="background-color: peachpuff;" >
   <div class="container">
       <div class="row">
           <div class="col mt-4 ">
                 <h1 style="color: orangered ; text-align: center;"> HTML սկսնակների համար </h1>
           </div>
       </div>
       <div class="row">
           <div class="col mt-5 ">
               <img src="https://media.rusability.ru/wp-content/uploads/2017/09/4-35.jpg" alt="HTML"  class="img-fluid"  >
           </div>
       </div>
       <div class="row">
           <div class="col mt-5 mb-4 ">
               <h2 style="text-align: center; color: orangered; " > Ի՞նչ է HTML - ը </h2> <hr style="color: black;">
           </div>
           <br> <br> 
           <p> <strong>
            HTML' (անգլ.՝ HyperText Markup Language, գերտեքստի նշագրման լեզու), նշագրման լեզու, որն օգտագործվում է վեբ-էջերի մեծամասնության նշագրման համար։ HTML լեզուն վերամշակվում է դիտարկչի կողմից և ցուցադրվում է մարդու կողմից հեշտ ընթեռնելի փաստաթղթի տեսքով։ <br>
            HTML-ի օգնությամբ հեշտությամբ կարելի է ստեղծել համեմատաբար պարզ, սակայն գեղեցիկ ձևավորված փաստաթուղթ։ Ի հավելումն փաստաթղթի կառուցվածքի պարզեցմանը՝ HTML-ում աջակցվում էր հիպերտեքստը։ Մուլտիմեդիայի հնարավորությունները ավելացվեցին քիչ ավելի ուշ։ Ի սկզբանե HTML լեզուն ստեղծվել է որպես փաստաթղթերի կառուցման և ձևավորման միջոց՝ անկախ օգտագործվող արտածման միջոցից (էկրան, տպիչ և այլն) ցուցադրելու միջոց։ Նախնական HTML ձևաչափով տեքստը պետք է առանց ոճային և կառուծվածքային ձևափոխման արտածվեր սարքավորման վրա՝ տարբեր տեխնիկական համալրմամբ (ժամանակակից համակարգչի գունավոր էկրանը, օրգանայզերի մոնոխրոմային էկրան, բջջային հեռախոսների կամ տեքստերի ձայնային վերարտադրման ծրագրերի կամ սարքավորումների սահմանափակ չափերով էկրան)։ Սակայն HTML-ի ժամանակակից կիրառումը հեռու է սկզբնական նշանակությունից։
           </strong></p>
       </div>

       <div class="row">
           <div class="col mt-5 ">
              <h1 style="color: orangered; text-align: center; "> Անցնենք սովորելուն </h1> <hr  style="color: black;">
           </div>
       </div>
       <div class="row">
           <div class="col mt-5 ">
               <h3 style="color: orangered;" > 1.Ինչպես օգտագործել </h3> <br>
           </div>
           <div class="col mt-4">
               <p><strong>
                   Առաջինը պետք է ընտրել ծրագիրը որով ցանկանում եք աշխատել : Խորհուրդ եմ տալիս օգտվել Visual Studio Code ծրագրից ( <a href="https://code.visualstudio.com/" target="_blank"  style="color:orangered;" >Visual Studio Code</a>) :  Մուտք գործելուց հետո ստեղծել նոր ֆայլ :  Այնուհետև ընտրել "HTML" և գրելու համար տրված դաշտում գրել "!" նշանը : Այնտեղի title հատվածում գրել ցանկացած վերնագիր :  <br> "Head" - Կայքի վերևի հատվածը:
                   <br> "Body"- Կայքի այն հատվածը որտեղ կատարվում է աշխատանքը: <br> "Footer" - Կայքի ներքևի հատվածը: 
                   <br> Շատ կարևոր է ցանկացած փոփոխություն կատարելուց հետո սեղմել Ctrl+S : (Տես կետ 7-ը) : 
               </strong></p>
           </div>
       </div>

       <div class="row">
           <div class="col mt-4 ">
               <h3 style="color: orangered;">2.Վերնագիր</h3> 
           </div>
           <div class="col mt-4">
               <p> <strong>
                   Վերնագրի համար գոյություն ունի 6 չափ: Ամենամեծը h1-է : Իսկ ամենափոքրը h6: Այն գրվում է h1 : Փակվում /h1 : Իհարկե գրվում է &lt;&gt; սլաքների մեջ: Այն ինչ ցանկանում եք գրել պետք է գրել նրանց մեջտեղում :  
               </strong></p> <br> 
              <a href="compile.html"> <button>Try</button> </a>
           </div>
        
       </div>
       <div class="row">
           <div class="col mt-4">
               <h3 style="color: orangered;">3.Ոճ</h3>
           </div>
           <div class="col">
               <p> <strong>
                   Որպես օրինակ կարող ենք վերցնել &lt;h1&gt; հրամանը : Անգլերեն style նշանակում է ոճ: Եվ մենք կօգտագործենք style հրամանը : Այն գրվում է այսպես օրինակ &lt;h1 style="color: black;" &gt; color - ի փոխարեն կարող եք ընտրել նաև այլ հրամաններ : Վերնագիրը գեղեցիկ է լինում մեջտեղում : Դա իրականացնելու համար հարկավոր է օգտագործել կրկին style հրամանը : Կարող ենք օգտագործել այն օրինակ հ1 hրամանի հետ &lt;հ1 style="text-align:center;" &gt; :
               </strong></p>
           </div>
          
       </div>
       <div class="row">
        <div class="col mt-4 ">
            <h3 style="color: orangered;" > 4. Տեքստ </h3>
        </div>
        <div class="col mt-4 ">
            <p> <strong>
        Սովորական տեքստ գրելու համար կարելի է օգտագործել <р> հրամանը որը նշանակում Է paragraph: Սակայն կարելի է տեքստին տալ նաև տարբեր ձևեր: Italic - <i>Տեքստը գրում է թեք</i> : Այն նշանակում են &lt;i&gt; : Strong - <strong>Տեքստը գրում է մուգ</strong> : Այս հրամաններին նույնպես կարելի է տալ style :  U - underline - <u>Ընդգծում է տեքստը</u> : 
            </strong> </p>
        </div>
        
       </div>
       <div class="row">
           <div class="col mt-4">
               <h3 style="color: orangered;" >4.Նկար</h3>
           </div>
           <div class="col mt-4 ">
               <p> <strong>
             Նկար վերցնելու համար հարկավոր է  Google-ից կամ այլ ցանցից ընտրել նկար, սեղմել աջ սեղմակը և ընտրել Copy image address hրամանը :
              Նկար տեղադրելու համար հարկավոր է օգտվել img հրամանից : Image- նկար : Այս հրամանը գրելու դեպքում կտեսնեք , որ ավելանում է alt հրամանը ինչը շատ օգտակար , երբ նկարը չի երևում: Այնտեղ կարող եք կրճատ գրել ինչի մասին է նկարը:
               </strong> </p>
           </div>
         
       </div>
    
       <div class="row">
           <div class="col mt-4 ">
               <h3 style="color: orangered;"> 5.Հղում(link) </h3>
           </div>
           <div class="col mt-4 "> 
               <p><strong>
                   Հղումը օգտագործելու համար կարելի է օգտագործել &lt;a&gt; հրամանը : 
               </strong></p>
           </div>
         
       </div>
       
       <div class="row">
           <div class="col mt-4 ">
               <h3 style="color: orangered;">6.Կոճակ(button)</h3>
           </div>
           <div class="col mt-4 ">
            <button type="button" >Կոճակ</button>
            <p><strong>
                Կոճակի համար անհրաժեշտ է buttоn հրամանը: &lt;Button&gt;
                 հրամանին կարող ենք style սահմանել : Կոճակին կարող ենք link ավելացնել :  
                 &lt;button style="" ;&gt;
            </strong></p>
           </div>
           
       </div>
       <div class="row">
           <div class="col  mt-4 ">
               <h3 style="color: orangered;"> 7.Լրացուցիչ նյութեր </h3>
           </div>
           <div class="col mt-3 mb-4 ">
               <strong>
          1.Տող բաց թողնելու համար պետք է &lt;br&gt; հրամանը: <br>
          2.Տող բաց թողնելու հարմար և ներքևում ընդգծելու համար օգտագործվում է &lt;hr&gt; : Նրան նույնպես կարող ենք style տալ:  
           
              </strong>
           </div>
           <hr style="color: black;" >
           <div class="row">
               <div class="col mt-3  ">
                   <h3 style="color: orangered; text-align: center; " > Շնորհավորում եմ դուք արդեն ունեք html-ի մասին սկզբնական գիտելիքներ </h3>
               </div>
           </div>
            <hr style="color: black;" >
           <div class="col">
               <div class="row">
                <div class="col-lg-6 mt-5 mb-5  " style="color: darkseagreen;" >
                    <a href="programming.html" class="btn btn-dark btn-lg" style="width: 100%; color: white; " >Programming</a>
                </div>
                <div class="col-lg-6  mt-5 mb-5 ">
                    <a href="php.html" class="btn btn-dark btn-lg" style="width: 100%; color: white; " >PHP</a>
               </div>
           </div>
    
 </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html