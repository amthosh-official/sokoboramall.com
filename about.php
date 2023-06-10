0<?php include('header.php'); ?>
<body>
    <?php
    include('navtop.php');
    ?>
    <div id="background">
        <div id="page">
           <?php include ('nav_sidebar.php');?>
            <div id="content">
                <div class="hero-unit-table">
                    <div id="header">
                        

                    </div>
                    <div id="body">








                        <h3>About US</h3>
                        <div class="hero-unit-table">

							<div id="accordion">
										<h3>About The Company</h3>
										<div>SokoBora Mall, a leading number one financial institute, retailers, distributes, 
										and markets various products. The company store will be place on Polentes Building, second floor,
										Extension Street,Wote City The company offers electrons,fashions,food stuffs, computers, 
										building materials,sporting goods, , farming equipements,, audio products, and related equipment; and accessories,
										including strings, replacement parts, cases, straps, clothing, and more. The company was founded in 2006 and is based
										in ALGERIA, Negros Occidental , DUBAN.  </div>
										<h3>Mission</h3>
										<div>SokoBora Mall- an outlet that provide individuals the satisfaction of owning a wide range of high 
											quality and reliable products.</div>
										<h3>Vision</h3>
										<div>We fill the joy of quality services into every household, through quality products and best deliveries.</div>
										<h3>About the Developer</h3>
										<div>T and O (THOSH OFFICIAL ) Thosh Official is a software firm which provides software to cater every business needs. As our tag line
										says" Your Problem ,Our Solution".</div>
							</div>
                        </div>
                    </div>
                    <div id="footer">
                        <?php include('footer.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include('footer_bottom.php');
    ?>
		<script src="external/jquery/jquery.js"></script>
<script src="jquery-ui.js"></script>
<script>

$( "#accordion" ).accordion();



var availableTags = [
	"ActionScript",
	"AppleScript",
	"Asp",
	"BASIC",
	"C",
	"C++",
	"Clojure",
	"COBOL",
	"ColdFusion",
	"Erlang",
	"Fortran",
	"Groovy",
	"Haskell",
	"Java",
	"JavaScript",
	"Lisp",
	"Perl",
	"PHP",
	"Python",
	"Ruby",
	"Scala",
	"Scheme"
];
$( "#autocomplete" ).autocomplete({
	source: availableTags
});



$( "#button" ).button();
$( "#radioset" ).buttonset();



$( "#tabs" ).tabs();



$( "#dialog" ).dialog({
	autoOpen: false,
	width: 400,
	buttons: [
		{
			text: "Ok",
			click: function() {
				$( this ).dialog( "close" );
			}
		},
		{
			text: "Cancel",
			click: function() {
				$( this ).dialog( "close" );
			}
		}
	]
});

// Link to open the dialog
$( "#dialog-link" ).click(function( event ) {
	$( "#dialog" ).dialog( "open" );
	event.preventDefault();
});



$( "#datepicker" ).datepicker({
	inline: true
});



$( "#slider" ).slider({
	range: true,
	values: [ 17, 67 ]
});



$( "#progressbar" ).progressbar({
	value: 20
});



$( "#spinner" ).spinner();



$( "#menu" ).menu();



$( "#tooltip" ).tooltip();



$( "#selectmenu" ).selectmenu();


// Hover states on the static widgets
$( "#dialog-link, #icons li" ).hover(
	function() {
		$( this ).addClass( "ui-state-hover" );
	},
	function() {
		$( this ).removeClass( "ui-state-hover" );
	}
);
</script>
</body>
</html>