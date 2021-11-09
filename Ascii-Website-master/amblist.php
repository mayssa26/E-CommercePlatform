<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ASCII 2018</title>
    <script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">
    <style>
        .m-t-10 {
    margin-top: 10px;
    }
        </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">ASCII 18 </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html">EVENTS</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html">ABOUT ASCII</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html">SPONSORS</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="regs.php"> REGISTRATION</a>
                    </li>
					
					<li>
					   <a class="page-scroll" href="amblist.php">AMBASSADORS</a>
					</li>
					
					
					<li>
					   <a class="page-scroll" href="vol.php">VOLUNTEER</a>
					</li>
					
                    <li>
                        <a class="page-scroll" href="#contact">contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To ACII 18!</div>
                <div class="intro-heading"> An activity based learning </div>
                <a href="#Services" class="page-scroll btn btn-xl">Tell Me More</a>
            </div>
        </div>
    </header>
    <!-- Registration  -->
    <div class="container">
        <div class="row" style="margin: 1cm;">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">AMBASSADORS LIST</div>
                    <div class="panel-body">
                        <form role="form"  accept-charset="UTF-8">
                        
                           
                          
                            <select class="form-control" onchange="showUser(this.value)" name="users" id="univ">
                            <option value="">Select a University:</option>
                              <option value="1" >Abasyn University Peshawar</option>
                              <option value="185" >Abasyn University Islamabad</option>
                              <option value="200" >Abbottabad University of Science and Technology Abbottabad</option><option value="2" >Abdul Wali Khan University Mardan Mardan</option><option value="3" >Aga Khan University Karachi</option><option value="213" >Agriculture university Peshawar</option><option value="4" >Air University Islamabad</option><option value="5" >Al-Hamd Islamic University Sariab</option><option value="7" >Al-Khair University Rawalpindi</option><option value="6" >Ali Institute of Education Lahore</option><option value="183" >APCOMS Islamabad</option><option value="8" >Arid Agriculture University Rawalpindi</option><option value="9" >Bacha Khan University Charsadda</option><option value="10" >Bahauddin Zakariya University Multan</option><option value="179" >Bahauddin Zakariya University Lahore Campus</option><option value="11" >Bahria University Islamabad</option><option value="12" >Balochistan UET Khuzdar</option><option value="13" >Balochistan University of Information Technnology, Engineering & Management Sciences Quetta</option><option value="14" >Baqai Medical University Karachi</option><option value="181" >Barani institute of information Rawalpindi</option><option value="15" >Beaconhouse National University Lahore</option><option value="16" >Benazir Bhutto Shaheed University Lyari Karachi</option><option value="180" >Bilquis Postgraduate College for Women Rawalpindi</option><option value="212" >Buraq Institute of Technology Rawalpindi</option><option value="174" >Capital University of Science & Technology Islamabad</option><option value="17" >CECOS University Peshawar</option><option value="182" >Center For Advanced Studies In Engineering Islamabad</option><option value="190" >Centre for Emerging Sciences, Engineering & Technology (CESET) Islamabad</option><option value="18" >City University of Science & Information Technology Peshawar</option><option value="19" >Commecs Institute of Business and Emerging Sciences Karachi</option><option value="20" >COMSATS Institute of Information Technology Islamabad</option><option value="163" >COMSATS Institute of Information Technology Abbotabad</option><option value="164" >COMSATS Institute of Information Technology Attock</option><option value="165" >COMSATS Institute of Information Technology Wah Cantt</option><option value="166" >COMSATS Institute of Information Technology Sahiwal</option><option value="167" >COMSATS Institute of Information Technology Lahore</option><option value="168" >COMSATS Institute of Information Technology Vehari</option><option value="199" >Comwave Institute Of Science & Informatoin Technology Islamabad</option><option value="21" >Dadabhoy Institute of Higher Education Karachi</option><option value="22" >Dawood University of Engineering and Technology Karachi</option><option value="23" >DHA Suffa University Karachi</option><option value="24" >DOW University of Health Sciences Saddar Town</option><option value="162" >Dr. AQ Khan institute of Computer Science Kahuta</option><option value="171" >Dr. AQ Khan institute of Computer Science Islamabad</option><option value="25" >Fatima Jinnah Women University Rawalpindi</option><option value="26" >Federal Urdu University of Arts Islamabad</option><option value="161" >Federal Urdu University of Arts Karachi</option><option value="27" >Forman Christian College Lahore</option><option value="28" >Foundation University Islamabad</option><option value="217" >Foundation university Rawalpindi Campus</option><option value="220" >Foundation University Rawalpindi Campus</option><option value="188" >Gabrial College Mandi Bahaud-din</option><option value="29" >Gandhara University Peshawar</option><option value="30" >Ghazi University Dera Ghazi Khan</option><option value="32" >GIFT University Gujranwala</option><option value="31" >GIKI Topi</option><option value="33" >Global Institute Lahore</option><option value="34" >Gomal University Dera Ismail Khan</option><option value="35" >Government College for Women University Sialkot</option><option value="36" >Government College University Faisalabad</option><option value="37" >Government College University Lahore</option><option value="38" >Government College Women University Faisalabad</option><option value="39" >Government Sadiq College Women University Bahawalpur</option><option value="40" >Greenwich University Karachi</option><option value="41" >Habib University Karachi</option><option value="42" >Hajvery University Lahore</option><option value="43" >Hamdard University Karachi</option><option value="176" >Hamdard University Islamabad</option><option value="44" >Hazara University Dhodial</option><option value="45" >HITEC University Taxila</option><option value="223" >ICAP Islamabad</option><option value="46" >Imperial College of Business Studies Lahore</option><option value="47" >Indus University Karachi</option><option value="48" >Indus Valley School of Art and Architecture Karachi</option><option value="49" >Information Technology University Lahore</option><option value="50" >Institute of Business & Technology Karachi</option><option value="51" >Institute of Business Administration Karachi</option><option value="172" >Institute of Business Administration Sukkur</option><option value="52" >Institute of Business Management Karachi</option><option value="53" >Institute of Management Sciences Peshawar</option><option value="54" >Institute of Southern Punjab Multan</option><option value="55" >Institute of Space Technology Islamabad</option><option value="56" >International Islamic University Islamabad</option><option value="57" >Iqra National University Peshawar</option><option value="58" >Iqra University Karachi</option><option value="175" >Iqra University Islamabad</option><option value="203" >Islamabad Federal College Islamabad</option><option value="59" >Islamia College Peshawar Peshawar</option><option value="60" >Isra University Hyderabad</option><option value="206" >Isra University Islamabad Campus</option><option value="211" >Jinnah Informatics Rawalpindi</option><option value="61" >Jinnah Sindh Medical University Karachi</option><option value="62" >Jinnah University for Women Karachi</option><option value="63" >Karachi Institute of Economics & Technology Karachi</option><option value="64" >Karachi School for Business & Leadership Karachi</option><option value="65" >Karakurum International University Gilgit</option><option value="66" >KASB Institute of Technology Karachi</option><option value="67" >Khawaja Freed University of Engineering & IT Rahim Yar Khan</option><option value="68" >Khushal Khan Khattak University Karak</option><option value="69" >Khyber Medical University Peshawar</option><option value="70" >Khyber Pakhtunkhwa Agricultural University Peshawar</option><option value="71" >King Edward Medical University Lahore</option><option value="72" >Kinnaird College for Women Lahore</option><option value="73" >Kohat University of Science & Technology Kohat</option><option value="74" >Lahore College for Women University Lahore</option><option value="75" >Lahore Garrison University Lahore</option><option value="76" >Lahore Leads University Lahore</option><option value="77" >Lahore School of Economics Lahore</option><option value="78" >Lahore University of Management Sciences Lahore</option><option value="79" >Lasbela University of Agriculture Lasbela</option><option value="80" >Liaquat University of Medical & Health Sciences Jamshoro</option><option value="81" >Mehran University of Engineering and Technology Jamshoro</option><option value="221" >Millennium University  Islamabad</option><option value="82" >Minhaj University Lahore</option><option value="83" >Mirpur University of Science & Technology Mirpur</option><option value="84" >Mohammad Ali Jinnah University Karachi</option><option value="173" >Mohammad Ali Jinnah University Islamabad</option><option value="85" >Mohi-ud-Din Islamic University Nerian Sharif</option><option value="86" >Muhammad Nawaz Shareef University of Agriculture Multan</option><option value="87" >Muslim Youth University Islamabad</option><option value="201" >Namal College Mianwali</option><option value="88" >National College of Arts Lahore</option><option value="89" >National College of Business Administration Lahore</option><option value="90" >National Defence University Islamabad</option><option value="222" >National Textile Institute Islamabad</option><option value="91" >National Textile University Faisalabad</option><option value="92" >National University of Computer and Emerging Sciences Islamabad</option><option value="189" >National University of Computer and Emerging Sciences Peshawar</option><option value="196" >National University of Computer and Emerging Sciences Faisalabad</option><option value="93" >National University of Modern Languages Islamabad</option><option value="94" >National University of Sciences and Technology Islamabad</option><option value="95" >Nazeer Hussain University Karachi</option><option value="96" >NED University of Engineering and Technology Karachi</option><option value="97" >Newports Institute of Communications and Economics Karachi</option><option value="169" >NFC Faisalabad</option><option value="170" >NFC Multan</option><option value="98" >Northern University Nowshera</option><option value="195" >NUST College of EME Rawalpindi</option><option value="99" >Pakistan Institute of Development Economics Islamabad</option><option value="100" >Pakistan Institute of Engineering & Applied Sciences Islamabad</option><option value="101" >Pakistan Institute of Fashion and Design Lahore</option><option value="102" >Peoples University of Sciences for Women Nawabshah</option><option value="103" >PIMSAT Institute of Higher Education Karachi</option><option value="104" >Preston University Islamabad</option><option value="105" >Qarshi University Lahore</option><option value="106" >Quaid-e-Awam UET Nawabshah</option><option value="207" >Quaid-e-Azam College of Engineering and Technology Sahiwal</option><option value="107" >Quaid-i-Azam University Islamabad</option><option value="108" >Qurtaba University Dera Ismail Khan</option><option value="218" >Rawalpndi  Medical  College Rawalpndi</option><option value="109" >Riphah International University Islamabad</option><option value="110" >Sardar Bahadur Khan Womens University Quetta</option><option value="111" >Sarhad University of Science and Information Technology Peshawar</option><option value="112" >Shah Abdul Latif University Khairpur</option><option value="113" >Shaheed Benazir Bhutto City University Karachi</option><option value="184" >Shaheed Benazir Bhutto City University Islamabad</option><option value="114" >Shaheed Benazir Bhutto University Sheringal</option><option value="115" >Shaheed Benazir Bhutto University Shaheed Benazirabad Nawabshah</option><option value="116" >Shaheed Benazir Bhutto Women University Peshawar</option><option value="117" >Shaheed Mohtarma Benazir Bhutto Medical University Larkana</option><option value="118" >Shaheed Zulfiqar Ali Bhutto Institute of Science and Technology Karachi</option><option value="119" >Shaheed Zulfiqar Ali Bhutto University of Law Karachi</option><option value="120" >Shifa Tameer-e-Millat University Islamabad</option><option value="121" >Sindh Agriculture University Tandojam</option><option value="122" >Sindh Madresatul Islam University Karachi</option><option value="123" >Sir Syed University of Engineering and Technology Karachi</option><option value="202" >SKANS School of Accountancy Islamabad</option><option value="124" >Sukkur Institute of Business Administration Sukkur</option><option value="125" >Superior Group of Colleges Lahore</option><option value="193" >Superior University Gujranwala</option><option value="194" >Superior University Lahore</option><option value="219" >Swedish College of Engineering and Technology Wah Cantt</option><option value="126" >Textile Institute of Pakistan Karachi</option><option value="127" >The Institute of Management Sciences Lahore</option><option value="128" >The Islamia University of Bahawalpur Bahawalpur</option><option value="129" >The University of Faisalabad Faisalabad</option><option value="130" >The University of Lahore Lahore</option><option value="197" >The University of Lahore Islamabad Campus</option><option value="131" >The Women University Multan</option><option value="191" >University  of Central Punjab Islamabad</option><option value="132" >University of Agriculture Faisalabad</option><option value="133" >University of Azad Jammu & Kashmir Muzaffarabad</option><option value="134" >University of Balochistan Quetta</option><option value="135" >University of Central Punjab Lahore</option><option value="136" >University of Education Lahore</option><option value="214" >University of Education Multan Campus</option><option value="137" >University of Engineering & Technology Lahore</option><option value="138" >University of Engineering & Technology Peshawar</option><option value="139" >University of Engineering & Technology Taxila</option><option value="178" >University of Engineering & Technology Faisalabad</option><option value="140" >University of Gujrat Gujrat</option><option value="208" >University of Gujrat Lahore Campus</option><option value="141" >University of Haripur Haripur</option><option value="142" >University of Health Sciences Lahore</option><option value="215" >University of Health Sciences Rawalpindi Campus</option><option value="143" >University of Karachi Karachi</option><option value="144" >University of Loralai Loralai</option><option value="145" >University of Malakand Chakdara</option><option value="146" >University of Management and Technology Lahore</option><option value="147" >University of Management Sciences and IT Kotli</option><option value="148" >University of Peshawar Peshawar</option><option value="149" >University of Poonch Rawalakot</option><option value="150" >University of Sargodha Sargodha</option><option value="186" >University of Sargodha Bhakkar</option><option value="187" >University of Sargodha  Mandi bahaud-din</option><option value="192" >University of Sargodha Gujranwala</option><option value="210" >University of Sargodha Mianwali Campus</option><option value="151" >University of Science & Technology Bannu</option><option value="152" >University of Sindh Jamshoroo</option><option value="153" >University of South Asia Lahore</option><option value="154" >University of Swabi Swabi</option><option value="155" >University of Swat Mingora</option><option value="156" >University of the Punjab Lahore</option><option value="177" >University of the punjab Jehlum</option><option value="157" >University of Turbat Turbat</option><option value="158" >University of Veterinary and Animal Sciences Lahore</option><option value="159" >University of Wah Wah Cantt</option><option value="198" >Virtual University Gujranwala</option><option value="216" >Virtual University ICS Prime Lahore Campus</option><option value="204" >Virtual University Islamabad Islamabad</option><option value="205" >Virtual University Rawalpindi Rawalpindi</option><option value="209" >Women University Bagh Kashmir</option><option value="160" >Ziauddin University Karachi</option></select>
                          
                            
                            
                            
                        </form>
                        <br>
<div id="txtHint"><b></b></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
