<?php
include("./pagetransitions/page-transitions.php");



//--PAGE TRANSITIONS
/**********************/
$jcr_page_transition=set_jcr_page_transition(2,"strict");
//$jcr_page_transition=set_jcr_page_transition();

?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="demo simples transitions entre les pages du site">
		<meta name="author" content="Jean-Christophe Rangon">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<title>Page Transitions|Demo</title>
		
<!--  Inclusion du CSS-->
		<link rel="stylesheet" href="./pagetransitions/page-transitions.css">
	</head>
	
	<body class="<?=$jcr_page_transition;?>">
		<h1>Page 3</h1>
		<div>
		<div style="padding:0 25px;text-align:left;"><a href="./demo-page2.php"><< page 2</a></div>
		</div>
		<section style="width:80%;margin:0 auto;min-height:90vh;border:1px solid #333;background:#eee;padding:20px 10px;">
			<h2>section1</h2>
			<p>
				<div style="display:inline-block;width:200px;height:300px;background:blue;padding:40px; border:1px solid #333;float:left;"></div>
				Novo denique perniciosoque exemplo idem Gallus ausus est inire flagitium grave, quod Romae cum ultimo dedecore temptasse aliquando dicitur Gallienus, et adhibitis paucis clam ferro succinctis vesperi per tabernas palabatur et conpita quaeritando Graeco sermone, cuius erat inpendio gnarus, quid de Caesare quisque sentiret. et haec confidenter agebat in urbe ubi pernoctantium luminum claritudo dierum solet imitari fulgorem. postremo agnitus saepe iamque, si prodisset, conspicuum se fore contemplans, non nisi luce palam egrediens ad agenda quae putabat seria cernebatur. et haec quidem medullitus multis gementibus agebantur.

				Quibus occurrere bene pertinax miles explicatis ordinibus parans hastisque feriens scuta qui habitus iram pugnantium concitat et dolorem proximos iam gestu terrebat sed eum in certamen alacriter consurgentem revocavere ductores rati intempestivum anceps subire certamen cum haut longe muri distarent, quorum tutela securitas poterat in solido locari cunctorum.

				Post haec indumentum regale quaerebatur et ministris fucandae purpurae tortis confessisque pectoralem tuniculam sine manicis textam, Maras nomine quidam inductus est ut appellant Christiani diaconus, cuius prolatae litterae scriptae Graeco sermone ad Tyrii textrini praepositum celerari speciem perurgebant quam autem non indicabant denique etiam idem ad usque discrimen vitae vexatus nihil fateri conpulsus est.
				Novo denique perniciosoque exemplo idem Gallus ausus est inire flagitium grave, quod Romae cum ultimo dedecore temptasse aliquando dicitur Gallienus, et adhibitis paucis clam ferro succinctis vesperi per tabernas palabatur et conpita quaeritando Graeco sermone, cuius erat inpendio gnarus, quid de Caesare quisque sentiret. et haec confidenter agebat in urbe ubi pernoctantium luminum claritudo dierum solet imitari fulgorem. postremo agnitus saepe iamque, si prodisset, conspicuum se fore contemplans, non nisi luce palam egrediens ad agenda quae putabat seria cernebatur. et haec quidem medullitus multis gementibus agebantur.

				Quibus occurrere bene pertinax miles explicatis ordinibus parans hastisque feriens scuta qui habitus iram pugnantium concitat et dolorem proximos iam gestu terrebat sed eum in certamen alacriter consurgentem revocavere ductores rati intempestivum anceps subire certamen cum haut longe muri distarent, quorum tutela securitas poterat in solido locari cunctorum.

				Post haec indumentum regale quaerebatur et ministris fucandae purpurae tortis confessisque pectoralem tuniculam sine manicis textam, Maras nomine quidam inductus est ut appellant Christiani diaconus, cuius prolatae litterae scriptae Graeco sermone ad Tyrii textrini praepositum celerari speciem perurgebant quam autem non indicabant denique etiam idem ad usque discrimen vitae vexatus nihil fateri conpulsus est.
				Novo denique perniciosoque exemplo idem Gallus ausus est inire flagitium grave, quod Romae cum ultimo dedecore temptasse aliquando dicitur Gallienus, et adhibitis paucis clam ferro succinctis vesperi per tabernas palabatur et conpita quaeritando Graeco sermone, cuius erat inpendio gnarus, quid de Caesare quisque sentiret. et haec confidenter agebat in urbe ubi pernoctantium luminum claritudo dierum solet imitari fulgorem. postremo agnitus saepe iamque, si prodisset, conspicuum se fore contemplans, non nisi luce palam egrediens ad agenda quae putabat seria cernebatur. et haec quidem medullitus multis gementibus agebantur.

				Quibus occurrere bene pertinax miles explicatis ordinibus parans hastisque feriens scuta qui habitus iram pugnantium concitat et dolorem proximos iam gestu terrebat sed eum in certamen alacriter consurgentem revocavere ductores rati intempestivum anceps subire certamen cum haut longe muri distarent, quorum tutela securitas poterat in solido locari cunctorum.

				Post haec indumentum regale quaerebatur et ministris fucandae purpurae tortis confessisque pectoralem tuniculam sine manicis textam, Maras nomine quidam inductus est ut appellant Christiani diaconus, cuius prolatae litterae scriptae Graeco sermone ad Tyrii textrini praepositum celerari speciem perurgebant quam autem non indicabant denique etiam idem ad usque discrimen vitae vexatus nihil fateri conpulsus est.
			</p>
		</section>

<!--  Inclusion du JS-->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="./pagetransitions/page-transitions.js"></script>
	</body>
</html>