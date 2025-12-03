<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact us | Patny Systems</title>
 <meta name="description" content="Get in touch with us at Patny Systems. We would be happy to answer any of your queries.">
    <meta name="keywords" content="">
    <link rel="canonical" href="https://www.patnysystems.com/contact.php"/>  
    <meta name="robots" content="index, follow"/>  
      <!--Meta Tags End-->    
    <!--Og tag-->
    <meta property="og:title" content="Contact us | Patny Systems"/>
<meta property="og:site_name" content="PANTY SYSTEMS"/>
<meta property="og:url" content="https://www.patnysystems.com/contact.php"/>
<meta property="og:description" content="Get in touch with us at Patny Systems. We would be happy to answer any of your queries." />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:image" content="https://www.patnysystems.com/images/solar111.jpg" />
    
    <?php include 'toplinks.php'; ?>


    <!-- crm code start -->
   <!--   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script> -->
    <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
            integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
            crossorigin="anonymous"></script>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->

    <style type="text/css">

        label{
            text-align: start;
/*            float: right;*/
            margin-right: 5px;
             /*font-family: 'Arial','sans-serif';*/
            font-size:92.8%;
        }
        select{
            width:100%;
        }
        label:hover{
              text-shadow: 0 1px 1px rgba(0,0,0,.4);
        }
        .buttonStyle{
            border-radius:8px;
            -moz-border-radius:8px;
            border:2px solid #EFE6BF;
        }
        .btn
        {
            background-color: white;

            text-align:left;
            height:100%;
        }

        .dropdown-menu
        {

            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            padding: 0;
            margin: 0;
            list-style: none;
            font-size: 13px;
            font-weight: 500;
            background-color: white;
            border: 1px solid rgba(0, 0, 0, 0.15);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
            color: #464646;
            transition: all .3s;
            min-width:50px;
            transform: translate(-100%);
        }

        .dropdown-menu.open {  transform: translate(0%);}



        .btn-group
        {
            position: relative;
            display: inline-block;
            vertical-align: top;
        }

        .dropdown-menu li {  margin: 5px;  cursor: pointer;}
table {
    border-collapse: collapse;
    margin: 20px;
    /* margin-right: unset; */
    width: 100%;
}

    </style>

     <script type="text/javascript">

        $(document).ready(function() {
            formUrlParamFlds();
//            $('.dropdown-toggle').text($('.dropdown-menu').find('a').attr('dvalue'));

            $('.dropdown-toggle').on('click', function()
            {
                $('.dropdown-menu').toggleClass('open');

            });

            $('.dropdown-menu li').on('click', function()
            {

                var dvElem = $(this).parent().parent();

                dvElem.find('.dropdown-toggle').text( $(this).find('a').attr('dvalue') );
                $('.dropdown-menu').removeClass('open');
                $(dvElem).next().focus();
            });
        });

        function formUrlParamFlds(){

            const queryString = window.location.search;
            var arrVal = ['utm_content','utm_term','utm_campaign','utm_channel','utm_medium','utm_source'];
            var arrNames = ['sUtmContent','sUtmTerm','sUtmCampaign','iChannelId','iUtmMedium','iChannelId'];
            var iLen = arrNames.length,sParam;

            const urlParams = new URLSearchParams(queryString);

            if(iLen>0) {
                for (var i = 0; i < iLen; i++) {
                    if (urlParams.get(arrVal[i]) != null)
                        createHiddenflds(arrNames[i], urlParams.get(arrVal[i]));
                }
            }

            function createHiddenflds(fldNmVal,fldVal){
                var dvWebform = document.getElementById("dvWebform"),arrElems,elem=null;
                arrElems = $('[value='+fldNmVal+']');
                if(arrElems!=null && arrElems.length>0)
                {
                    var tr;
                    elem = arrElems[0];
                    tr = elem.parentNode.parentNode;
                    elem = tr.cells[1].children[0];
                    if(elem.tagName=='SELECT')
                    {

                        var iLen = elem.options.length,k,bSelect=false;
                        if(iLen > 0)
                        {
                            for(k=0;k<iLen;k++)
                            {
                                var txt = (elem.options[k].innerText);

                                if(txt.trim()==fldVal)
                                {
                                    bSelect=true;
                                    elem.options[k].selected=true;
                                    break;
                                }
                            }
                        }
                        if(bSelect==false)
                        {
                            var newOption = document.createElement('option'),optionText;
                            optionText = document.createTextNode(fldVal);
                            newOption.appendChild(optionText);
                            newOption.setAttribute('value',fldVal);
                            elem.appendChild(newOption);
                            elem.options[elem.length-1].selected=true;
                        }
                    }
                    else
                        elem.setAttribute("value",fldVal);
                }
                if(elem==null)
                {
                    var txtFld = document.createElement("INPUT");
                    txtFld.name = "FNames";
                    txtFld.type = "hidden";
                    txtFld.setAttribute("value",fldNmVal);
                    dvWebform.appendChild(txtFld);

                    txtFld = document.createElement("INPUT");
                    txtFld.name = "FValues";
                    txtFld.type = "hidden";
                    txtFld.setAttribute("value",fldVal);
                    dvWebform.appendChild(txtFld);
                }

            }
        }

        function onClkValidateLeadInfo()
        {
            var arrElements,tdLabel,bMandatory = true;
            arrElements = document.forms["frmLeadInfo"].elements;
            for (var i = 0;i <arrElements.length;i++)
            {
                switch (arrElements[i].type)
                        {
                    case 'text':
                    case 'hidden':
                    case 'password':
                    case 'textarea':
                    case 'date':
                    case 'file':
                        if(arrElements[i].getAttribute("mandatory") == 1)
                        {
                            if((arrElements[i].value).length == 0)
                                bMandatory = false;
                        }
                        if(arrElements[i].getAttribute("controlType")!=null && arrElements[i].getAttribute("controlType") ==12)
                        {
                            var elem = $(arrElements[i]),dvElem,arrElem;
                            dvElem = elem.parent();
                            arrElem = $(dvElem).find('input');
                            arrElem[1].value  = dvElem.find('.dropdown-toggle').text().trim()+""+arrElem[0].value;
                        }
                        break;
                    case 'select-one':
                        if(arrElements[i].getAttribute("mandatory") == 1)
                        {
                            if(arrElements[i].value <= 0)
                                bMandatory = false;
                        }
                        break;
                }
                if(!bMandatory)
                {
                    tdLabel = arrElements[i].parentNode.previousSibling;
                    while(tdLabel.nodeType != 1)
                        tdLabel = tdLabel.previousSibling;
                    alert((tdLabel.textContent).replace(/^\s+|\s+$/, '')+" is mandatory");
                    //                                        alert((tdLabel.innerText).replace(/^\s+|\s+$/, '')+" is mandatory");
                    arrElements[i].focus();
                    return false;
                }
            }
            return true;
        }
        var TYPE_NUMERIC = 2;
        var TYPE_FLOAT = 3;
        var TYPE_DATE = 4;

        //var TYPE_NUMERIC=2,TYPE_FLOAT=3,TYPE_DATE=4;

        if(document.captureEvents)
        {
            if( Event.KEYUP )
                document.captureEvents( Event.KEYUP);
        }
        /**
         Allows values of type specified in parameter to be entered.
         @param objTxt -- TextField object
         @param iType -- Field type -- Default - 'string'
         values: string=1,numeric=2,float=3,date=4
         **/
        function checkInput(objTxt,iType)
        {
            var evt,keycode;
            if(window.event)
                evt = window.event;
            else
                evt = window.Event;

            keycode = evt.keyCode;

            if (keycode != 9 && keycode != 16)
            {  //9-tab,16-shift+tab
                if (keycode != 37 && keycode != 39 && keycode != 8 && keycode != 46 && keycode != 36 && keycode != 35)
                {               // left arrow,right arrow, backspace, delete , Home , End
                    if (iType == TYPE_NUMERIC)//Numeric
                    {
                        objTxt.value = objTxt.value.replace(/([^\-0-9])/g, "");
                        //objTxt.value = objTxt.value.replace(/([^/\d])/g,"");

                        if (objTxt.value.lastIndexOf("-") > 0)
                            objTxt.value = objTxt.value.substring(0, objTxt.value.lastIndexOf("-"));
                    }
                    else if (iType == TYPE_FLOAT)//Float
                    {
                        objTxt.value = objTxt.value.replace(/([^.\-0-9])/g, "");

                        if (objTxt.value.lastIndexOf("-") > 0)
                            objTxt.value = objTxt.value.substring(0, objTxt.value.lastIndexOf("-"));
                        if (objTxt.value.indexOf(".") != objTxt.value.lastIndexOf("."))
                            objTxt.value = objTxt.value.substring(0, objTxt.value.lastIndexOf("."));
                    }
                    else if (iType == TYPE_DATE)//date
                        {
                            //checkDateFormat(objTxt);
                        }
                }
            }

        }
        /**
         Checks for date format
         @param objTxt -- TextField Object
         **/
        function checkDateFormat(objTxt)
        {
            return; // not checking for date.
            for(var i=0;i < objTxt.value.length;i++)
            {
                if(i==2 || i==5)
                {
                    if(objTxt.value.charAt(i)!="/")
                        objTxt.value = objTxt.value.substring(0,i);
                }
                else if((objTxt.value.lastIndexOf("/"))!=(objTxt.value.indexOf("/")) &&(objTxt.value.lastIndexOf("/")!=-1))
                {
                    if((objTxt.value.lastIndexOf("/") - objTxt.value.indexOf("/") )!=3 )
                        objTxt.value = objTxt.value.substring(0,objTxt.value.lastIndexOf("/"))
                }
                else if(objTxt.value.indexOf("/") != -1)
                    {
                        if(objTxt.value.indexOf("/") < 2)
                            objTxt.value = objTxt.value.replace(/([^0-9])/g,"");
                    }
                if(objTxt.value.charAt(3)=="/"|| objTxt.value.charAt(4)=="/")
                {
                    objTxt.value = objTxt.value.substring(0,objTxt.value.indexOf("/")+1);
                }
                objTxt.value = objTxt.value.replace(/([^\/0-9])/g,"");

                //objTxt.value = objTxt.value.replace(/^(\d{3}\/d{2}\/d{4})$/);
            }
        }
        function uploadFile(fileInput,sId,sUrl,iFieldId)
        {
            var sValue = fileInput.value;
            sValue = sValue.substring(sValue.lastIndexOf("\\")+1);

            var elem = fileInput.nextSibling;
            while (elem && elem.nodeType != 1)// 1=Element_Node
            {
                elem = elem.nextSibling;
            }

            var objFile = fileInput.files[0],objRegExp=/^(image\/bmp|image\/gif|image\/jpeg|image\/png|image\/tiff)$/i; // filter for image files;
            if(!objRegExp.test(objFile.type) &&  fileInput.getAttribute("accept")!=null)
            {
                fileInput.value = "";
                alert("Invalid image file");
                return false;
            }
            else {
                elem.value = sValue;
                sUrl = sUrl + "?JSESSIONID=" + sId + "&uploadFileName=" + sValue+"&uploadFieldId="+iFieldId;

                var vFD = new FormData();
                vFD.append('upload', objFile);
                var oXHR = new XMLHttpRequest();
                //            oXHR.upload.addEventListener('progress', null, false);
                //            oXHR.addEventListener('load', uploadFinish, false);
                //            oXHR.addEventListener('error', uploadError, false);
                //            oXHR.addEventListener('abort', uploadAbort, false);

                oXHR.open('POST', sUrl);
                oXHR.send(vFD);
            }

        }
        function onClkCheckboxes(objchk)
        {
            objchk.parentNode.parentNode.children[1].value = objchk.checked?1:0;
        }

    </script>
    <!-- crm code end -->
</head>
<body>
<?php include 'header.php'; ?>

<!--Start breadcrumb area-->     

<section class="breadcrumb-area" id="inr">

    <div class="container">

        <div class="row">

            <div class="col-xl-12">

                <div class="inner-content clearfix">

                    <div class="title float-left">

                       <h1>Get In Touch With Us</h1>

                    </div>

                    <div class="breadcrumb-menu float-right">

                        <ul class="clearfix">

                            <li><a href="index.php">Home</a></li>

                            <li class="active">Contact</li>

                        </ul>    

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!--End breadcrumb area-->



<!--Start Contact Details Area-->

<section class="contact-details-area">

    <div class="container">

        <div class="row">

            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">

                <div class="single-contact-details-box text-center">

                    <div class="image-box">

                        <img src="images/resources/contact-details-1.jpg" alt="Awesome Image">

                    </div>

                    <div class="text">

                        <p>Ph: +91-99480 81000/ +91-99480 91000<br> Email: info@patnysystems.com, PSPL88@yahoo.com</p>

                        <a class="btn-two" href="#">Schedule for Call<span class="icon-null"></span></a>    

                    </div>

                </div>

            </div>

            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">

                <div class="single-contact-details-box text-center">

                    <div class="google-map-box">

                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60899.962921621605!2d78.47149982051991!3d17.447855438745393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9a093f639ebb%3A0x138d729b6f8ec5b!2sPatny%20Systems%20P%20Ltd!5e0!3m2!1sen!2sin!4v1654080966982!5m2!1sen!2sin" width="360" height="228" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  

                    </div>

                    <div class="text">

                        <p>160, Patny Plaza, Sardar Patel Road, Secunderabad – 500 003<br> India.</p>

                        <a class="btn-two" href="#">View Full Map<span class="icon-null"></span></a>    

                    </div>     

                </div>

            </div>

            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">

                <div class="single-contact-details-box text-center">

                    <div class="image-box">

                        <img src="images/resources/contact-details-2.jpg" alt="Awesome Image">

                    </div>

                    <div class="text">

                        <p>We’re here to help with any question<br> of our customers.</p>

                        <a class="btn-two" href="#">Customers FAQ’s<span class="icon-null"></span></a>    

                    </div>

                </div>

            </div>

        </div>

        

        <div class="row">

            <div class="col-xl-12">

                <div class="emergency-call wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms"> 

                    <h6>Any Emergency? Call our 24/7 customer support team at <span>+91-99480 81000</span></h6>

                </div>

            </div>

        </div> 

    </div>

</section>  

<!--End Contact Details Area-->

  

<!--Start contact form area-->

<section class="contact-info-area">

    <div class="container">

        <div class="row">

            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">

                <div class="contact-form-text-box">

                    <div class="inner">

                        <div class="icon-holder wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">

                            <span class="flaticon-envelope"></span>

                        </div>

                        <div class="sec-title">

                            <p>Drop Us a Line</p>

                            <div class="title">Send Your Message</div>

                            <div class="border-box"></div>

                        </div>

                        <div class="inner-content">

                            <h2>Leave your<br> information here and get<br> reply from our expert.</h2>

                        </div>

                    </div>

                </div>      

            </div>

            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">

                <div class="contact-form">

                    <div class="inner">

                     <form name="frmLeadInfo" id="frmLeadInfo" onsubmit="return onClkValidateLeadInfo();" action="https://patnysystems.centrahubcrm.com/in/streamline/module/webForm!saveWebForm.do" method="post">
    <input type='hidden' name ='requestedSession'  id ='requestedSession'  spellcheck='true'  autocorrect='on'  onKeyUp='checkInput(this,1,false,event);' value ='241677777516975A62140A042E3213DB'  cdatatype ='1'  class ='alignLeft null' >
    <div style='display:none' id='msgrequestedSession'></div>
    <input type='hidden' name ='templateId'  id ='templateId'  spellcheck='true'  autocorrect='on'  onKeyUp='checkInput(this,1,false,event);' value ='6'  cdatatype ='1'  class ='alignLeft null' >
    <div style='display:none' id='msgtemplateId'></div>
    <input type='hidden' name ='companyCode'  id ='hfCompanyCode'  spellcheck='true'  autocorrect='on'  onKeyUp='checkInput(this,1,false,event);' value ='015P0'  cdatatype ='1'  class ='alignLeft null' >
    <div style='display:none' id='msghfCompanyCode'></div>
    <div id="dvWebform" style="width: 100%;
    
    height: auto;
   ">
        <table   align=center cellpadding=2 cellspacing=0 >
              <tr  >
                                    <td  class ='tdLayout'   ><label> Enter Name</label>
                                <input type='hidden' name ='FNames'  spellcheck='true'  autocorrect='on'  onKeyUp='checkInput(this,1,false,event);' value ='sCompany'  cdatatype ='1'  class ='alignLeft null' >
                            </td>
                                <td  class ='tdLayout'   >
                                    <input type='text' name ='FValues'  spellcheck='true'  autocorrect='on'  onKeyUp='checkInput(this,1,false,event);' cdatatype ='1'  class ='alignLeft '   dataTypeId=0 fieldName= style='width:100%;' mandatory='1'>
                                </td>
                                </tr>
            <tr  >
                <td  class ='tdLayout'   >
                <label> Enter Email</label>
                                <input type='hidden' name ='FNames'  spellcheck='true'  autocorrect='on'  onKeyUp='checkInput(this,1,false,event);' value ='sEmail'  cdatatype ='1'  class ='alignLeft null' ></td>
                                <td  class ='tdLayout'   >
                                    <input type='text' name ='FValues'  spellcheck='true'  autocorrect='on'  onKeyUp='checkInput(this,1,false,event);' cdatatype ='1'  class ='alignLeft '   dataTypeId=0 fieldName= style='width:100%;' mandatory='1'>
                                </td>
                                </tr>
                              
                                <tr  >
                                    <td  class ='tdLayout'   ><label>  Phone Number</label>
                                <input type='hidden' name ='FNames'  spellcheck='true'  autocorrect='on'  onKeyUp='checkInput(this,1,false,event);' value ='sPhone'  cdatatype ='1'  class ='alignLeft null' >
                            </td>
                                <td  class ='tdLayout'   >
                                    <div class="dropdown" style='display:none;width:25%;height:1em;'>
                                                <button class="btn dropdown-toggle" type="button" id="ddbutton3"   data-bs-toggle="dropdown" style='margin-left: -0.1em;'>
                                                         </button>

                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li>
                                                        <a class="dropdown-item" href="#" dvalue=''></a>
                                                    </li>
                                                        </ul>
                                            </div>
                                            <input type='text' spellcheck='true'  autocorrect='on'  onKeyUp='checkInput(this,2,false,event);' cdatatype ='2'  class ='alignLeft '   dataTypeId=0 controlType=12 fieldName= style='width:280px;' mandatory='0'>
                                            <input type='hidden' name ='FValues'  spellcheck='true'  autocorrect='on'  onKeyUp='checkInput(this,1,false,event);' cdatatype ='1'  class ='alignLeft null'   dataTypeId=0 style='width:280px;'>
                                        </td>
                                    </tr>

                                    <tr  >
                                        <td  class ='tdLayout'   ><label>  Subject</label>
                                <input type='hidden' name ='FNames'  spellcheck='true'  autocorrect='on'  onKeyUp='checkInput(this,1,false,event);' value ='EmailSubject'  cdatatype ='1'  class ='alignLeft null' >
                            </td>

                                <td  class ='tdLayout'   >
                                    <input type='text' name ='FValues'  spellcheck='true'  autocorrect='on'  onKeyUp='checkInput(this,1,false,event);' cdatatype ='1'  class ='alignLeft '   dataTypeId=0 fieldName= style='width:100%;' mandatory='0'>
                                </td>
                                </tr>
                                    <tr  >
                                        <td  class ='tdLayout'   ><label>  Message</label>
                                <input type='hidden' name ='FNames'  spellcheck='true'  autocorrect='on'  onKeyUp='checkInput(this,1,false,event);' value ='sDescription'  cdatatype ='1'  class ='alignLeft null' >
                            </td>
                                <td  class ='tdLayout'   >
                                    <input type='text' name ='FValues'  spellcheck='true'  autocorrect='on'  onKeyUp='checkInput(this,1,false,event);' cdatatype ='1'  class ='alignLeft '   dataTypeId=0 fieldName= style='width:100%;' mandatory='0'>
                                </td>
                                </tr>
                                <tr  >
                                    <td  class ='tdLayout'  align='right'   colspan='2' >
                                        
                                    </td>
                                </tr>
                                <tr  >
                                    <td  class ='tdLayout'  align='right'   colspan='2' >
                                        <input class="buttonStyle" type="submit" accesskey="S" style="width:100%;padding:15px 0;color: #ffffff;
    background: #0095d9;
    width: 100%;border: none;" value="Submit">
                </td>
            </tr>
        </table>
    </div>
</form>


                    </div>

                </div>

            </div>

            

            

        </div>

    </div>

</section>

<!--End contact form area-->



<!--Start Branches section-->

<section class="branches-section">

    <div class="container inner-content">

        <div class="row">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

            

                <div class="branches">

                <div class="row">

                <div class="col-md-4">

                    <!--Start Single Branches Box-->

                    <div class="single-branches-box text-center">

                        <div class="title-box"><h3>Unit 1</h3></div>

                        <ul>

                            <li> +91-40-2377 2882</li>

                            <li> info@patnysystems.com</li>

                        </ul> 

                        <div class="text">

                            <p>9/A, S.V.C.I.E,,Opp. (IDPL) Fire Station, IDA Balanagar, Hyderabad – 500 037</p>

                        </div>  

                    </div>

                    </div>

                    <!--End Single Branches Box-->

                    <!--Start Single Branches Box-->

                    <div class="col-md-4">

                    <div class="single-branches-box text-center">

                        <div class="title-box"><h3>Unit 2 </h3></div>

                        <ul>

                            <li>+91-040 23772190</li>

                            <li> info@patnysystems.com</li>

                        </ul> 

                        <div class="text">

                            <p>Plot No.3, S.V.C.I.E, IDA Balanagar, Hyderabad – 37</p>

                        </div>  

                    </div>

                    </div>

                    <!--End Single Branches Box-->

                    

                    <!--Start Single Branches Box-->

                    <div class="col-md-4">

                    <div class="single-branches-box text-center">

                        <div class="title-box"><h3>Unit 4 </h3></div>

                        <ul>

                            <li>+91-99480 55001</li>

                            <li> info@patnysystems.com</li>

                        </ul> 

                        <div class="text">

                            <p>APIIC Kucharam,Plot No.6, Survey No. 228/9, Kucharam, Toopran,   Medak – 502336</p>

                        </div>  

                    </div>

                    </div>

                    </div>

                    <!--End Single Branches Box-->

                       

                </div> 

            </div>

        </div>

        <div class="row">

            <div class="col-xl-12">

                <div class="our-all-branches wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms"> 

                    <h6>We have successfully running <span>4 branches</span> in india.</h6>

                </div>

            </div>

        </div> 

    </div>

</section>

<!--End Branches section-->



<!--Start Google Map Area-->

<section class="google-map-area">

    <div class="container-fluid">

        <div class="row">

            <div class="col-xl-12">

                

            </div>

        </div>

    </div>

</section>

<!--End Google Map Area-->
<script>
   var filename='contact.php';
   switch(filename)
   {
       case 'index.php': 
       $('#a1').addClass('current');
       break;
       case 'about.php':
       $('#a2').addClass('current');
       break;
        case 'patny-perforated-cable-trays-pct.php':
        case 'patny-ladder-type-cable-tray.php':
            case 'patny-angular-ladder-type-cable-trays.php':
            case 'patny-solid-bottom-type-cable-trays.php':
            case 'patny-cable-tray-covers.php':
            case 'patny-coupler-plates.php':
            case 'patny-hot-dip-galvanizing.php':
            case 'patny-earth-pipe-electrodes.php':
            case 'earthing-materials.php':
            case 'patny-gratings.php':
            case 'barbed-fencing.php':
            case 'copper-earthing-material.php':
       $('#a3').addClass('current');
       break;
      case 'c-purlin.php':
          case 'l-angles.php':
              case 'z-purlin.php':
                  case 'channel.php':
                      case 'tolerances.php':
       $('#a4').addClass('current');
       break;
        case 'testimonials.php':
       $('#a5').addClass('current');
       break;
        case 'contact.php':
       $('#a6').addClass('current');
       break;
   }
    window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 5000);
</script>
<?php include 'footer.php'; ?>

</body>

 

</html>