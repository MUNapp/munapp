<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	margin: 0;
	padding: 0;
	color: #000;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 100%;
	line-height: 1.4;
	background-color: #0070FF;
}
/* ~~ Element/tag selectors ~~ */
ul, ol, dl { /* Due to variations between browsers, it's best practices to zero padding and margin on lists. For consistency, you can either specify the amounts you want here, or on the list items (LI, DT, DD) they contain. Remember that what you do here will cascade to the .nav list unless you write a more specific selector. */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* removing the top margin gets around an issue where margins can escape from their containing block. The remaining bottom margin will hold it away from any elements that follow. */
	padding-right: 15px;
	padding-left: 15px; /* adding the padding to the sides of the elements within the blocks, instead of the block elements themselves, gets rid of any box model math. A nested block with side padding can also be used as an alternate method. */
}
a img { /* this selector removes the default blue border displayed in some browsers around an image when it is surrounded by a link */
	border: none;
}
/* ~~ Styling for your site's links must remain in this order - including the group of selectors that create the hover effect. ~~ */
a:link {
	color: #00008B;
	text-decoration: underline; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
}
a:visited {
	color: #00008B;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
	text-decoration: none;
}
/* ~~ This fixed width container surrounds all other blocks ~~ */
.container {
	width: 960px;
	background: #FFFFFF;
	margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout */
}
/* ~~ The header is not given a width. It will extend the full width of your layout. ~~ */
header {
	background-color: #4B92DB;
}
/* ~~ These are the columns for the layout. ~~ 

1) Padding is only placed on the top and/or bottom of the block elements. The elements within these blocks have padding on their sides. This saves you from any "box model math". Keep in mind, if you add any side padding or border to the block itself, it will be added to the width you define to create the *total* width. You may also choose to remove the padding on the element in the block element and place a second block element within it with no width and the padding necessary for your design.

2) No margin has been given to the columns since they are all floated. If you must add margin, avoid placing it on the side you're floating toward (for example: a right margin on a block set to float right). Many times, padding can be used instead. For blocks where this rule must be broken, you should add a "display:inline" declaration to the block element's rule to tame a bug where some versions of Internet Explorer double the margin.

3) Since classes can be used multiple times in a document (and an element can also have multiple classes applied), the columns have been assigned class names instead of IDs. For example, two sidebar blocks could be stacked if necessary. These can very easily be changed to IDs if that's your preference, as long as you'll only be using them once per document.

4) If you prefer your nav on the left instead of the right, simply float these columns the opposite direction (all left instead of all right) and they'll render in reverse order. There's no need to move the blocks around in the HTML source.

*/
.sidebar1 {
	float: right;
	width: 180px;
	background: #0073CF;
	padding-bottom: 10px;
}
.content {
	padding: 10px 0;
	width: 780px;
	float: right;
}

/* ~~ This grouped selector gives the lists in the .content area space ~~ */
.content ul, .content ol {
	padding: 0 15px 15px 40px; /* this padding mirrors the right padding in the headings and paragraph rule above. Padding was placed on the bottom for space between other elements on the lists and on the left to create the indention. These may be adjusted as you wish. */
}

/* ~~ The navigation list styles (can be removed if you choose to use a premade flyout menu like Spry) ~~ */
nav ul {
	list-style: none; /* this removes the list marker */
	border-top: 1px solid #666; /* this creates the top border for the links - all others are placed using a bottom border on the LI */
	margin-bottom: 15px; /* this creates the space between the navigation on the content below */
}
nav ul li {
	border-bottom: 1px solid #666; /* this creates the button separation */
}
nav ul a, nav ul a:visited { /* grouping these selectors makes sure that your links retain their button look even after being visited */
	padding: 5px 5px 5px 15px;
	display: block; /* this gives the link block properties causing it to fill the whole LI containing it. This causes the entire area to react to a mouse click. */
	width: 160px;  /*this width makes the entire button clickable for IE6. If you don't need to support IE6, it can be removed. Calculate the proper width by subtracting the padding on this link from the width of your sidebar container. */
	text-decoration: none;
	background: #0073CF;
}
nav ul a:hover, nav ul a:active, nav ul a:focus { /* this changes the background and text color for both mouse and keyboard navigators */
	color: #FFF;
	background-color: #4169E1;
}

/* ~~ The footer ~~ */
footer {
	padding: 10px 0;
	background: #5D89BA;
	position: relative;/* this gives IE6 hasLayout to properly clear */
	clear: both; /* this clear property forces the .container to understand where the columns end and contain them */
}

/*HTML 5 support - Sets new HTML 5 tags to display:block so browsers know how to render the tags properly. */
header, section, footer, aside, nav, article, figure {
	display: block;
}
-->
</style><!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--></head>

<body>
<div class="container">
  <header>
    <a href="#"><img src="../United-nations-UN-flag-picrure copy copy.jpg" alt="Insert Logo Here" name="Insert_logo" width="185" height="185" id="Insert_logo" style="background: #C6D580; display:block;" /></a>
  </header>
  <div class="sidebar1">
    <nav>
      <ul>
        <li><a href="erase_all_data.php" id="will nuke data!">Erase all data</a></li>
        <li><a href="attendance.txt"> Attendance</a></li>
        <li><a href="#">Link three</a></li>
        <li><a href="#">Link four</a></li>
      </ul>
    </nav>
    <aside>
      <p><!-- end .sidebar1 --></p>
    </aside>
  </div>
  <article class="content">
    <table>
      <form method="post" action="input.php">

      </form>
    </table>
    <p>Attendance</p>
    <form action="input.php" method="post" enctype="application/x-www-form-urlencoded" name="form2">
      <p>
        <input name="Attendance" type="hidden" id="Attendance" value="On">
      </p>
      <p>
        <input type="checkbox" name="Afghanistan" id="Afghanistan">
        <label for="Afghanistan">Afghanistan</label>
        <input type="checkbox" name="Albania" id="Albania">
        <label for="Albania">Albania</label>
        <input type="checkbox" name="Algeria" id="Algeria">
        <label for="Algeria">Algeria</label>
        <input type="checkbox" name="Andorra" id="Andorra">
        <label for="Andorra">Andorra</label>
        <input type="checkbox" name="Angola" id="Angola">
        <label for="Angola">Angola</label>
        <input name="Antigua and Barbuda" type="checkbox" id="Antigua and Barbuda" value="">
        <label for="Antigua and Barbuda">Antigua and Barbuda</label>
      </p>
      <p>
        <input type="checkbox" name="Argentina" id="Argentina">
        <label for="Argentina">Argentina</label>
        <input type="checkbox" name="Armenia" id="Armenia">
        <label for="Armenia">Armenia</label>
        <input type="checkbox" name="Australia" id="Australia">
        <label for="Australia">Australia</label>
        <input type="checkbox" name="Austria" id="Austria">
        <label for="Austria">Austria</label>
        <input type="checkbox" name="Azerbaijan" id="Azerbaijan">
        <label for="Azerbaijan">Azerbaijan</label>
        <input type="checkbox" name="Bahamas" id="Bahamas">
        <label for="Bahamas">Bahamas</label>
        <input type="checkbox" name="Bahrain" id="Bahrain">
        <label for="Bahrain">Bahrain</label>
      </p>
      <p>
        <input type="checkbox" name="Bangladesh" id="Bangladesh">
        <label for="Bangladesh">Bangladesh</label>
        <input type="checkbox" name="Barbados" id="Barbados">
        <label for="Barbados">Barbados</label>
        <input type="checkbox" name="Belarus" id="Belarus">
        <label for="Belarus">Belarus</label>
        <input type="checkbox" name="Belgium" id="Belgium">
        <label for="Belgium">Belgium</label>
        <input type="checkbox" name="Belize" id="Belize">
        <label for="Belize">Belize</label>
        <input name="Benin" type="checkbox" id="Benin">
        <label for="Benin">Benin</label>
        <input type="checkbox" name="Bhutan" id="Bhutan">
        <label for="Bhutan">Bhutan</label>
      </p>
      <p>
        <input type="checkbox" name="Bolivia (Plurinational State of)" id="Bolivia (Plurinational State of)">
        <label for="Bolivia (Plurinational State of)">Bolivia (Plurinational State of)</label>
        <input type="checkbox" name="Bosnia and Herzegovina" id="Bosnia and Herzegovina">
        <label for="Bosnia and Herzegovina">Bosnia and Herzegovina</label>
        <input type="checkbox" name="Botswana" id="Botswana">
        <label for="Botswana">Botswana</label>
        <input type="checkbox" name="Brazil" id="Brazil">
        <label for="Brazil">Brazil</label>
      </p>
      <p>
        <input type="checkbox" name="Brunei Darussalam" id="Brunei Darussalam">
        <label for="Brunei Darussalam">Brunei Darussalam</label>
        <input type="checkbox" name="Bulgaria" id="Bulgaria">
        <label for="Bulgaria">Bulgaria</label>
        <input type="checkbox" name="Burkina Faso" id="Burkina Faso">
        <label for="Burkina Faso">Burkina Faso</label>
        <input type="checkbox" name="Burundi" id="Burundi">
        <label for="Burundi">Burundi</label>
        <input type="checkbox" name="Cambodia" id="Cambodia">
        <label for="Cambodia">Cambodia</label>
      </p>
      <p>
        <input type="checkbox" name="Cameroon" id="Cameroon">
        <label for="Cameroon">Cameroon</label>
        <input type="checkbox" name="Canada" id="Canada">
        <label for="Canada">Canada</label>
        <input type="checkbox" name="Cape Verde" id="Cape Verde">
        <label for="Cape Verde">Cape Verde</label>
        <input type="checkbox" name="Central African Republic" id="Central African Republic">
        <label for="Central African Republic">Central African Republic</label>
        <input type="checkbox" name="Chad" id="Chad">
        <label for="Chad">Chad</label>
      </p>
      <p>
        <input type="submit" name="button2" id="button2" value="Submit">
      </p>
    </form>
    <p>&nbsp;</p>
<p>Cape Verde 16­09­1975</p>
    <p>Central African Republic 20­09­1960</p>
    <p>Chad 20­09­1960</p>
    <p>Chile 24­10­1945</p>
    <p>China 24­10­1945</p>
    <p>Colombia 05­11­1945</p>
    <p>Comoros 12­11­1975</p>
    <p>Congo 20­09­1960</p>
    <p>Costa Rica 02­11­1945</p>
    <p>Côte D'Ivoire 20­09­1960</p>
    <p>*</p>
    <p>Croatia</p>
    <p> 22­05­1992</p>
    <p>Cuba 24­10­1945</p>
    <p>Cyprus 20­09­1960</p>
    <p>Czech Republic</p>
    <p>*</p>
    <p> 19­01­1993</p>
    <p>Democratic People's Republic of Korea 17­09­1991</p>
    <p>Democratic Republic of the Congo</p>
    <p>Denmark 24­10­1945</p>
    <p>Djibouti 20­09­1977</p>
    <p>Dominica 18­12­1978</p>
    <p>Dominican Republic 24­10­1945</p>
    <p>Ecuador 21­12­1945</p>
    <p>*</p>
    <p> 24­10­1945</p>
    <p>Egypt</p>
    <p>El Salvador 24­10­1945</p>
    <p>Equatorial Guinea 12­11­1968</p>
    <p>Eritrea 28­05­1993</p>
    <p>Estonia 17­09­1991</p>
    <p>Ethiopia 13­11­1945</p>
    <p>Fiji 13­10­1970</p>
    <p>Finland 14­12­1955</p>
    <p>France 24­10­1945</p>
    <p>Gabon 20­09­1960</p>
    <p>Gambia 21­09­1965</p>
    <p>Georgia 31­07­1992</p>
    <p>*</p>
    <p>Germany</p>
    <p>Ghana 08­03­1957</p>
    <p>Greece 25­10­1945</p>
    <p>Grenada 17­09­1974</p>
    <p>Guatemala 21­11­1945</p>
    <p>Guinea 12­12­1958</p>
    <p>Guinea Bissau 17­09­1974</p>
    <p>Guyana 20­09­1966</p>
    <p> 18­09­1973</p>
    <p>Haiti 24­10­1945</p>
    <p>Honduras 17­12­1945</p>
    <p>Hungary 14­12­1955</p>
    <p>Iceland 19­11­1946</p>
    <p>India 30­10­1945</p>
    <p>*</p>
    <p>Indonesia</p>
    <p>Iran (Islamic Republic of) 24­10­1945</p>
    <p>Iraq 21­12­1945</p>
    <p>Ireland 14­12­1955</p>
    <p>Israel 11­05­1949</p>
    <p>Italy 14­12­1955</p>
    <p> 28­09­1950</p>
    <p>Jamaica 18­09­1962</p>
    <p>Japan 18­12­1956</p>
    <p>Jordan 14­12­1955</p>
    <p>Kazakhstan 02­03­1992</p>
    <p>Kenya 16­12­1963</p>
    <p>Kiribati 14­09­1999</p>
    <p>Kuwait 14­05­1963</p>
    <p>Kyrgyzstan 02­03­1992</p>
    <p>Lao People's Democratic Republic 14­12­1955</p>
    <p>Latvia 17­09­1991</p>
    <p>Lebanon 24­10­1945</p>
    <p>Lesotho 17­10­1966</p>
    <p>Liberia 02­11­1945</p>
    <p>*</p>
    <p>Libya</p>
    <p> 14­12­1955</p>
    <p>Liechtenstein 18­09­1990</p>
    <p>Lithuania 17­09­1991</p>
    <p>Luxembourg 24­10­1945</p>
    <p>Madagascar 20­09­1960</p>
    <p>Malawi 01­12­1964</p>
    <p>*</p>
    <p>Malaysia</p>
    <p>Maldives 21­09­1965</p>
    <p>Mali 28­09­1960</p>
    <p>Malta 01­12­1964</p>
    <p>Marshall Islands 17­09­1991</p>
    <p>Mauritania 27­10­1961</p>
    <p>Mauritius 24­04­1968</p>
    <p>Mexico 07­11­1945</p>
    <p>Micronesia (Federated States of) 17­09­1991</p>
    <p>Monaco 28­05­1993</p>
    <p>Mongolia 27­10­1961</p>
    <p>Montenegro</p>
    <p>Morocco 12­11­1956</p>
    <p>Mozambique 16­09­1975</p>
    <p>Myanmar 19­04­1948</p>
    <p> 17­09­1957</p>
    <p>*</p>
    <p> 28­06­2006</p>
    <p>Namibia 23­04­1990</p>
    <p>Nauru 14­09­1999</p>
    <p>Nepal 14­12­1955</p>
    <p>Netherlands 10­12­1945</p>
    <p>New Zealand 24­10­1945</p>
    <p>Nicaragua 24­10­1945</p>
    <p>Niger 20­09­1960</p>
    <p>Nigeria 07­10­1960</p>
    <p>Norway 27­11­1945</p>
    <p>Oman 07­10­1971</p>
    <p>Pakistan 30­09­1947</p>
    <p>Palau 15­12­1994</p>
    <p>Panama 13­11­1945</p>
    <p>Papua New Guinea 10­10­1975</p>
    <p>Paraguay 24­10­1945</p>
    <p>Peru 31­10­1945</p>
    <p>Philippines 24­10­1945</p>
    <p>Poland 24­10­1945</p>
    <p>Portugal 14­12­1955</p>
    <p>Qatar 21­09­1971</p>
    <p>Republic of Korea 17­09­1991</p>
    <p>Republic of Moldova 02­03­1992</p>
    <p>Romania 14­12­1955</p>
    <p>Russian Federation</p>
    <p>Rwanda 18­09­1962</p>
    <p>*</p>
    <p> 24­10­1945</p>
    <p>Saint Kitts and Nevis 23­09­1983</p>
    <p>Saint Lucia 18­09­1979</p>
    <p>Saint Vincent and the Grenadines 16­09­1980</p>
    <p>Samoa 15­12­1976</p>
    <p>San Marino 02­03­1992</p>
    <p>Sao Tome and Principe 16­09­1975</p>
    <p>Saudi Arabia 24­10­1945</p>
    <p>Senegal 28­09­1960</p>
    <p>*</p>
    <p> 01­11­2000</p>
    <p>Serbia</p>
    <p>Seychelles 21­09­1976</p>
    <p>Sierra Leone 27­09­1961</p>
    <p>Singapore</p>
    <p>*</p>
    <p> 19­01­1993</p>
    <p>Slovakia</p>
    <p>*</p>
    <p> 22­05­1992</p>
    <p>Slovenia</p>
    <p>Solomon Islands 19­09­1978</p>
    <p>Somalia 20­09­1960</p>
    <p>South Africa 07­11­1945</p>
    <p>South ​Sudan</p>
    <p>Spain 14­12­1955</p>
    <p>Sri Lanka 14­12­1955</p>
    <p>Sudan 12­11­1956</p>
    <p>Suriname 04­12­1975</p>
    <p>Swaziland 24­09­1968</p>
    <p>Sweden 19­11­1946</p>
    <p>Switzerland 10­09­2002</p>
    <p>Syrian Arab Republic</p>
    <p>*</p>
    <p> 21­09­1965</p>
    <p>*</p>
    <p> 14­07­2011</p>
    <p>*</p>
    <p> 24­10­1945</p>
    <p>Tajikistan 02­03­1992</p>
    <p>Thailand 16­12­1946</p>
    <p>The former Yugoslav Republic of Macedonia</p>
    <p>Timor­Leste 27­09­2002</p>
    <p>Togo 20­09­1960</p>
    <p>Tonga 14­09­1999</p>
    <p>Trinidad and Tobago 18­09­1962</p>
    <p>Tunisia 12­11­1956</p>
    <p>Turkey 24­10­1945</p>
    <p>Turkmenistan 02­03­1992</p>
    <p>Tuvalu 05­09­2000</p>
    <p>Uganda 25­10­1962</p>
    <p>Ukraine 24­10­1945</p>
    <p>United Arab Emirates 09­12­1971</p>
    <p>United Kingdom of Great Britain and Northern Ireland 24­10­1945</p>
    <p>United Republic of Tanzania</p>
    <p>United States of America 24­10­1945</p>
    <p>Uruguay 18­12­1945</p>
    <p>Uzbekistan 02­03­1992</p>
    <p>*</p>
    <p> 14­12­1961</p>
    <p>Vanuatu 15­09­1981</p>
    <p>Venezuela (Bolivarian Republic of) 15­11­1945</p>
    <p>Viet Nam 20­09­1977</p>
    <p>*</p>
    <p> 30­09­1947</p>
    <p>Yemen</p>
    <p>Zambia 01­12­1964</p>
    <p>Zimbabwe 25­08­1980</p>
    <h1>&nbsp;</h1>
    <section> </section>
    <section></section>
    <!-- end .content --></article>
  <footer>
    <p>Made by HD & LO'H</p>
  </footer>
<!-- end .container --></div>
</body>
</html>