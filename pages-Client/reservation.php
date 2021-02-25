<?php
require_once("../init/init.php");
require_once("../init/haut-page.php");
?>

<head><link rel="stylesheet" href="<?php echo RACINE_SITE; ?>pages-Client/css/reservation.css"></head>

<div id="overlay"></div>
	<div class="container1 calendar">
		<div class="header">
			<div class="icon arr prev"></div>
			<div class="month">Mai 2021</div>
			<div class="icon arr next"></div>
		</div>
		<table>
			<tr>
				<th>Dim</th><th>Lun</th><th>Mar</th><th>Mer</th><th>Jeu</th><th>Ven</th><th>Sam</th>
			</tr>
			<tr>
				<td class="notCurMonth">29</td><td class="notCurMonth">30</td>
				<td>1</td><td>2</td><td class="curDay">3</td><td>4</td><td>5</td>
			</tr>
			<tr>
				<td>6</td><td class="holiday">7</td><td>8</td><td>9</td><td>10</td><td>11</td><td>12</td>
			</tr>
			<tr>
				<td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td>
			</tr>
			<tr>
				<td>20</td><td>21</td><td>22</td><td class="holiday">23</td><td>24</td><td>25</td><td>26</td>
			</tr>
			<tr>
				<td>27</td><td>28</td><td>29</td><td>30</td>
				<td class="notCurMonth">1</td><td class="notCurMonth">2</td class="notCurMonth"><td class="notCurMonth">3</td>
			</tr>
		</table>
		<button class="button-big" id="add_event">Add event</button>
	</div>


	<form action="#" class="container1 booking" name="booking">
		
		<div class="dates" data-type="none">
			<label for="checkin">Date d'arrivée</label>
			<div class="input-text">
				<input type="datetime" name="jour" value="9 Juin, 2021" id="checkin" readonly>
				<div class="icon pop-up"></div>
			</div>

			<label for="checkout">Date de départ</label>
			<div class="input-text">
				<input type="datetime" name="jour" value="16 Juin, 2021" id="checkout" readonly>
				<div class="icon pop-up"></div>
			</div>
		</div>
		
		<ul class="persons">
			<li>
				<label>Adultes</label>
				<div class="input-text">
					<select name="adults">
						<option value="1">1</option>
						<option value="2" selected="selected">2</option>
						<option value="3">3</option>
						<option value="4">4</option>   
					</select>
					<div class="icon"></div>
				</div>
			</li>
			<li>
				<label>Enfants</label>
				<div class="input-text">
					<select name="children">
						<option value="0">0</option>
						<option value="1" selected="selected">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>   
					</select>
					<div class="icon"></div>
				</div>
			</li>
		</ul>

		<button class="button-big" type="submit" id="search"><div class="icon"></div>Sélectionner une chambre</button>
	</form>

<?php 
require_once("../init/bas-page.php");
?>

<script>$(document).ready(function(){
 $('.pop-up').on('click', function(){
 	$('#overlay').fadeIn(300); 
 	$('.calendar').fadeIn(300); 
 	let clickedbutton = $("input",$(this).parent()).attr('id');
 	$('.dates').data('type',clickedbutton);
 });
 
 $('table').on('click', function(event){
   let that=$(event.target);
    if(that.is('td') && !that.hasClass('notCurMonth') && !that.hasClass('holiday') && !that.hasClass('curDay')){
    	$('td.curDay').toggleClass('curDay');
    	that.toggleClass('curDay');
    }
}); 

$('#add_event').on('click', function(){
	let value= $('td.curDay').html();
    $('#overlay').fadeOut(300);
 	$('.calendar').fadeOut(300);
 	let id=($('.dates').data()).type;
 	$('#' + id).val(value+" Mai, 2021");
}); 

$('#search').on('click', function(e){
	$('.booking').addClass('is-sent');
	e.preventDefault();
});
});	</script>