<?php
/**
 * @package    Joomla.Language
 *
 * @copyright  (C) 2005 Open Source Matters, Inc. <https://www.joomla.org>
 * @copyright  (C) Translation 2008 - 2022 J!German <https://www.jgerman.de>
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * de-AT localise class.
 *
 * @since  1.6
 */
abstract class De_ATLocalise
{
	/**
	 * Returns the potential suffixes for a specific number of items
	 *
	 * @param   integer  $count  The number of items.
	 *
	 * @return  array  An array of potential suffixes.
	 *
	 * @since   1.6
	 */
	public static function getPluralSuffixes($count)
	{
		if ($count == 0)
		{
			return array('0');
		}

		if ($count == 1)
		{
			return array('ONE', '1');
		}

		return array('OTHER', 'MORE');
	}

	/**
	 * Returns the ignored search words
	 *
	 * @return  array  An array of ignored search words.
	 *
	 * @since   1.6
	 *
	 * @link    https://solariz.de/649/deutsche-stopwords.htm
	 */
	public static function getIgnoredSearchWords()
	{
		$search_ignore = array();
		$search_ignore[] = "ab";
		$search_ignore[] = "bei";
		$search_ignore[] = "da";
		$search_ignore[] = "deshalb";
		$search_ignore[] = "ein";
		$search_ignore[] = "für";
		$search_ignore[] = "haben";
		$search_ignore[] = "hier";
		$search_ignore[] = "ich";
		$search_ignore[] = "ja";
		$search_ignore[] = "kann";
		$search_ignore[] = "machen";
		$search_ignore[] = "muesste";
		$search_ignore[] = "nach";
		$search_ignore[] = "oder";
		$search_ignore[] = "seid";
		$search_ignore[] = "sonst";
		$search_ignore[] = "und";
		$search_ignore[] = "vom";
		$search_ignore[] = "wann";
		$search_ignore[] = "wenn";
		$search_ignore[] = "wie";
		$search_ignore[] = "zu";
		$search_ignore[] = "bin";
		$search_ignore[] = "eines";
		$search_ignore[] = "hat";
		$search_ignore[] = "manche";
		$search_ignore[] = "solches";
		$search_ignore[] = "an";
		$search_ignore[] = "anderm";
		$search_ignore[] = "bis";
		$search_ignore[] = "das";
		$search_ignore[] = "deinem";
		$search_ignore[] = "demselben";
		$search_ignore[] = "dir";
		$search_ignore[] = "doch";
		$search_ignore[] = "einig";
		$search_ignore[] = "er";
		$search_ignore[] = "eurer";
		$search_ignore[] = "hatte";
		$search_ignore[] = "ihnen";
		$search_ignore[] = "ihre";
		$search_ignore[] = "ins";
		$search_ignore[] = "jenen";
		$search_ignore[] = "keinen";
		$search_ignore[] = "manchem";
		$search_ignore[] = "meinen";
		$search_ignore[] = "nichts";
		$search_ignore[] = "seine";
		$search_ignore[] = "soll";
		$search_ignore[] = "unserm";
		$search_ignore[] = "welche";
		$search_ignore[] = "werden";
		$search_ignore[] = "wollte";
		$search_ignore[] = "während";
		$search_ignore[] = "alle";
		$search_ignore[] = "allem";
		$search_ignore[] = "allen";
		$search_ignore[] = "aller";
		$search_ignore[] = "alles";
		$search_ignore[] = "als";
		$search_ignore[] = "also";
		$search_ignore[] = "am";
		$search_ignore[] = "ander";
		$search_ignore[] = "andere";
		$search_ignore[] = "anderem";
		$search_ignore[] = "anderen";
		$search_ignore[] = "anderer";
		$search_ignore[] = "anderes";
		$search_ignore[] = "andern";
		$search_ignore[] = "anders";
		$search_ignore[] = "auch";
		$search_ignore[] = "auf";
		$search_ignore[] = "aus";
		$search_ignore[] = "bist";
		$search_ignore[] = "bsp.";
		$search_ignore[] = "daher";
		$search_ignore[] = "damit";
		$search_ignore[] = "dann";
		$search_ignore[] = "dasselbe";
		$search_ignore[] = "dazu";
		$search_ignore[] = "daß";
		$search_ignore[] = "dein";
		$search_ignore[] = "deine";
		$search_ignore[] = "deinen";
		$search_ignore[] = "deiner";
		$search_ignore[] = "deines";
		$search_ignore[] = "dem";
		$search_ignore[] = "den";
		$search_ignore[] = "denn";
		$search_ignore[] = "denselben";
		$search_ignore[] = "der";
		$search_ignore[] = "derer";
		$search_ignore[] = "derselbe";
		$search_ignore[] = "derselben";
		$search_ignore[] = "des";
		$search_ignore[] = "desselben";
		$search_ignore[] = "dessen";
		$search_ignore[] = "dich";
		$search_ignore[] = "die";
		$search_ignore[] = "dies";
		$search_ignore[] = "diese";
		$search_ignore[] = "dieselbe";
		$search_ignore[] = "dieselben";
		$search_ignore[] = "diesem";
		$search_ignore[] = "diesen";
		$search_ignore[] = "dieser";
		$search_ignore[] = "dieses";
		$search_ignore[] = "dort";
		$search_ignore[] = "du";
		$search_ignore[] = "durch";
		$search_ignore[] = "eine";
		$search_ignore[] = "einem";
		$search_ignore[] = "einen";
		$search_ignore[] = "einer";
		$search_ignore[] = "einige";
		$search_ignore[] = "einigem";
		$search_ignore[] = "einigen";
		$search_ignore[] = "einiger";
		$search_ignore[] = "einiges";
		$search_ignore[] = "einmal";
		$search_ignore[] = "es";
		$search_ignore[] = "etwas";
		$search_ignore[] = "euch";
		$search_ignore[] = "euer";
		$search_ignore[] = "eure";
		$search_ignore[] = "eurem";
		$search_ignore[] = "euren";
		$search_ignore[] = "eures";
		$search_ignore[] = "ganz";
		$search_ignore[] = "ganze";
		$search_ignore[] = "ganzen";
		$search_ignore[] = "ganzer";
		$search_ignore[] = "ganzes";
		$search_ignore[] = "gegen";
		$search_ignore[] = "gemacht";
		$search_ignore[] = "gesagt";
		$search_ignore[] = "gesehen";
		$search_ignore[] = "gewesen";
		$search_ignore[] = "gewollt";
		$search_ignore[] = "hab";
		$search_ignore[] = "habe";
		$search_ignore[] = "hatten";
		$search_ignore[] = "hin";
		$search_ignore[] = "hinter";
		$search_ignore[] = "ihm";
		$search_ignore[] = "ihn";
		$search_ignore[] = "ihr";
		$search_ignore[] = "ihrem";
		$search_ignore[] = "ihren";
		$search_ignore[] = "ihrer";
		$search_ignore[] = "ihres";
		$search_ignore[] = "im";
		$search_ignore[] = "in";
		$search_ignore[] = "indem";
		$search_ignore[] = "ist";
		$search_ignore[] = "jede";
		$search_ignore[] = "jedem";
		$search_ignore[] = "jeden";
		$search_ignore[] = "jeder";
		$search_ignore[] = "jedes";
		$search_ignore[] = "jene";
		$search_ignore[] = "jenem";
		$search_ignore[] = "jener";
		$search_ignore[] = "jenes";
		$search_ignore[] = "jetzt";
		$search_ignore[] = "kein";
		$search_ignore[] = "keine";
		$search_ignore[] = "keinem";
		$search_ignore[] = "keiner";
		$search_ignore[] = "keines";
		$search_ignore[] = "konnte";
		$search_ignore[] = "können";
		$search_ignore[] = "könnte";
		$search_ignore[] = "mache";
		$search_ignore[] = "machst";
		$search_ignore[] = "macht";
		$search_ignore[] = "machte";
		$search_ignore[] = "machten";
		$search_ignore[] = "man";
		$search_ignore[] = "manchen";
		$search_ignore[] = "mancher";
		$search_ignore[] = "manches";
		$search_ignore[] = "mein";
		$search_ignore[] = "meine";
		$search_ignore[] = "meinem";
		$search_ignore[] = "meiner";
		$search_ignore[] = "meines";
		$search_ignore[] = "mich";
		$search_ignore[] = "mir";
		$search_ignore[] = "mit";
		$search_ignore[] = "muss";
		$search_ignore[] = "musste";
		$search_ignore[] = "müßt";
		$search_ignore[] = "nicht";
		$search_ignore[] = "noch";
		$search_ignore[] = "nun";
		$search_ignore[] = "nur";
		$search_ignore[] = "ob";
		$search_ignore[] = "ohne";
		$search_ignore[] = "sage";
		$search_ignore[] = "sagen";
		$search_ignore[] = "sagt";
		$search_ignore[] = "sagte";
		$search_ignore[] = "sagten";
		$search_ignore[] = "sagtest";
		$search_ignore[] = "sehe";
		$search_ignore[] = "sehen";
		$search_ignore[] = "sehr";
		$search_ignore[] = "seht";
		$search_ignore[] = "sein";
		$search_ignore[] = "seinem";
		$search_ignore[] = "seinen";
		$search_ignore[] = "seiner";
		$search_ignore[] = "seines";
		$search_ignore[] = "selbst";
		$search_ignore[] = "sich";
		$search_ignore[] = "sicher";
		$search_ignore[] = "sie";
		$search_ignore[] = "sind";
		$search_ignore[] = "so";
		$search_ignore[] = "solche";
		$search_ignore[] = "solchem";
		$search_ignore[] = "solchen";
		$search_ignore[] = "solcher";
		$search_ignore[] = "sollte";
		$search_ignore[] = "sondern";
		$search_ignore[] = "um";
		$search_ignore[] = "uns";
		$search_ignore[] = "unse";
		$search_ignore[] = "unsen";
		$search_ignore[] = "unser";
		$search_ignore[] = "unses";
		$search_ignore[] = "unter";
		$search_ignore[] = "viel";
		$search_ignore[] = "von";
		$search_ignore[] = "vor";
		$search_ignore[] = "war";
		$search_ignore[] = "waren";
		$search_ignore[] = "warst";
		$search_ignore[] = "was";
		$search_ignore[] = "weg";
		$search_ignore[] = "weil";
		$search_ignore[] = "weiter";
		$search_ignore[] = "welchem";
		$search_ignore[] = "welchen";
		$search_ignore[] = "welcher";
		$search_ignore[] = "welches";
		$search_ignore[] = "werde";
		$search_ignore[] = "wieder";
		$search_ignore[] = "will";
		$search_ignore[] = "wir";
		$search_ignore[] = "wird";
		$search_ignore[] = "wirst";
		$search_ignore[] = "wo";
		$search_ignore[] = "wolle";
		$search_ignore[] = "wollen";
		$search_ignore[] = "wollt";
		$search_ignore[] = "wollten";
		$search_ignore[] = "wolltest";
		$search_ignore[] = "wolltet";
		$search_ignore[] = "würde";
		$search_ignore[] = "würden";
		$search_ignore[] = "z.B.";
		$search_ignore[] = "zum";
		$search_ignore[] = "zur";
		$search_ignore[] = "zwar";
		$search_ignore[] = "zwischen";
		$search_ignore[] = "über";
		$search_ignore[] = "aber";
		$search_ignore[] = "abgerufen";
		$search_ignore[] = "abgerufene";
		$search_ignore[] = "abgerufener";
		$search_ignore[] = "abgerufenes";
		$search_ignore[] = "acht";
		$search_ignore[] = "allein";
		$search_ignore[] = "allerdings";
		$search_ignore[] = "allerlei";
		$search_ignore[] = "allgemein";
		$search_ignore[] = "allmählich";
		$search_ignore[] = "allzu";
		$search_ignore[] = "alsbald";
		$search_ignore[] = "andererseits";
		$search_ignore[] = "andernfalls";
		$search_ignore[] = "anerkannt";
		$search_ignore[] = "anerkannte";
		$search_ignore[] = "anerkannter";
		$search_ignore[] = "anerkanntes";
		$search_ignore[] = "anfangen";
		$search_ignore[] = "anfing";
		$search_ignore[] = "angefangen";
		$search_ignore[] = "angesetze";
		$search_ignore[] = "angesetzt";
		$search_ignore[] = "angesetzten";
		$search_ignore[] = "angesetzter";
		$search_ignore[] = "ansetzen";
		$search_ignore[] = "anstatt";
		$search_ignore[] = "arbeiten";
		$search_ignore[] = "aufgehört";
		$search_ignore[] = "aufgrund";
		$search_ignore[] = "aufhören";
		$search_ignore[] = "aufhörte";
		$search_ignore[] = "aufzusuchen";
		$search_ignore[] = "ausdrücken";
		$search_ignore[] = "ausdrückt";
		$search_ignore[] = "ausdrückte";
		$search_ignore[] = "ausgenommen";
		$search_ignore[] = "ausser";
		$search_ignore[] = "ausserdem";
		$search_ignore[] = "author";
		$search_ignore[] = "autor";
		$search_ignore[] = "außen";
		$search_ignore[] = "außer";
		$search_ignore[] = "außerdem";
		$search_ignore[] = "außerhalb";
		$search_ignore[] = "bald";
		$search_ignore[] = "bearbeite";
		$search_ignore[] = "bearbeiten";
		$search_ignore[] = "bearbeitete";
		$search_ignore[] = "bearbeiteten";
		$search_ignore[] = "bedarf";
		$search_ignore[] = "bedurfte";
		$search_ignore[] = "bedürfen";
		$search_ignore[] = "befragen";
		$search_ignore[] = "befragte";
		$search_ignore[] = "befragten";
		$search_ignore[] = "befragter";
		$search_ignore[] = "begann";
		$search_ignore[] = "beginnen";
		$search_ignore[] = "begonnen";
		$search_ignore[] = "behalten";
		$search_ignore[] = "behielt";
		$search_ignore[] = "beide";
		$search_ignore[] = "beiden";
		$search_ignore[] = "beiderlei";
		$search_ignore[] = "beides";
		$search_ignore[] = "beim";
		$search_ignore[] = "beinahe";
		$search_ignore[] = "beitragen";
		$search_ignore[] = "beitrugen";
		$search_ignore[] = "bekannt";
		$search_ignore[] = "bekannte";
		$search_ignore[] = "bekannter";
		$search_ignore[] = "bekennen";
		$search_ignore[] = "benutzt";
		$search_ignore[] = "bereits";
		$search_ignore[] = "berichten";
		$search_ignore[] = "berichtet";
		$search_ignore[] = "berichtete";
		$search_ignore[] = "berichteten";
		$search_ignore[] = "besonders";
		$search_ignore[] = "besser";
		$search_ignore[] = "bestehen";
		$search_ignore[] = "besteht";
		$search_ignore[] = "beträchtlich";
		$search_ignore[] = "bevor";
		$search_ignore[] = "bezüglich";
		$search_ignore[] = "bietet";
		$search_ignore[] = "bisher";
		$search_ignore[] = "bislang";
		$search_ignore[] = "bis";
		$search_ignore[] = "bleiben";
		$search_ignore[] = "blieb";
		$search_ignore[] = "bloss";
		$search_ignore[] = "bloß";
		$search_ignore[] = "brachte";
		$search_ignore[] = "brachten";
		$search_ignore[] = "brauchen";
		$search_ignore[] = "braucht";
		$search_ignore[] = "bringen";
		$search_ignore[] = "bräuchte";
		$search_ignore[] = "bzw";
		$search_ignore[] = "böden";
		$search_ignore[] = "ca.";
		$search_ignore[] = "dabei";
		$search_ignore[] = "dadurch";
		$search_ignore[] = "dafür";
		$search_ignore[] = "dagegen";
		$search_ignore[] = "dahin";
		$search_ignore[] = "damals";
		$search_ignore[] = "danach";
		$search_ignore[] = "daneben";
		$search_ignore[] = "dank";
		$search_ignore[] = "danke";
		$search_ignore[] = "danken";
		$search_ignore[] = "dannen";
		$search_ignore[] = "daran";
		$search_ignore[] = "darauf";
		$search_ignore[] = "daraus";
		$search_ignore[] = "darf";
		$search_ignore[] = "darfst";
		$search_ignore[] = "darin";
		$search_ignore[] = "darum";
		$search_ignore[] = "darunter";
		$search_ignore[] = "darüber";
		$search_ignore[] = "darüberhinaus";
		$search_ignore[] = "dass";
		$search_ignore[] = "davon";
		$search_ignore[] = "davor";
		$search_ignore[] = "demnach";
		$search_ignore[] = "denen";
		$search_ignore[] = "dennoch";
		$search_ignore[] = "derart";
		$search_ignore[] = "derartig";
		$search_ignore[] = "derem";
		$search_ignore[] = "deren";
		$search_ignore[] = "derjenige";
		$search_ignore[] = "derjenigen";
		$search_ignore[] = "derzeit";
		$search_ignore[] = "desto";
		$search_ignore[] = "deswegen";
		$search_ignore[] = "diejenige";
		$search_ignore[] = "diesseits";
		$search_ignore[] = "dinge";
		$search_ignore[] = "direkt";
		$search_ignore[] = "direkte";
		$search_ignore[] = "direkten";
		$search_ignore[] = "direkter";
		$search_ignore[] = "doppelt";
		$search_ignore[] = "dorther";
		$search_ignore[] = "dorthin";
		$search_ignore[] = "drauf";
		$search_ignore[] = "drei";
		$search_ignore[] = "dreißig";
		$search_ignore[] = "drin";
		$search_ignore[] = "dritte";
		$search_ignore[] = "drunter";
		$search_ignore[] = "drüber";
		$search_ignore[] = "dunklen";
		$search_ignore[] = "durchaus";
		$search_ignore[] = "durfte";
		$search_ignore[] = "durften";
		$search_ignore[] = "dürfen";
		$search_ignore[] = "dürfte";
		$search_ignore[] = "eben";
		$search_ignore[] = "ebenfalls";
		$search_ignore[] = "ebenso";
		$search_ignore[] = "ehe";
		$search_ignore[] = "eher";
		$search_ignore[] = "eigenen";
		$search_ignore[] = "eigenes";
		$search_ignore[] = "eigentlich";
		$search_ignore[] = "einbaün";
		$search_ignore[] = "einerseits";
		$search_ignore[] = "einfach";
		$search_ignore[] = "einführen";
		$search_ignore[] = "einführte";
		$search_ignore[] = "einführten";
		$search_ignore[] = "eingesetzt";
		$search_ignore[] = "einigermaßen";
		$search_ignore[] = "eins";
		$search_ignore[] = "einseitig";
		$search_ignore[] = "einseitige";
		$search_ignore[] = "einseitigen";
		$search_ignore[] = "einseitiger";
		$search_ignore[] = "einst";
		$search_ignore[] = "einstmals";
		$search_ignore[] = "einzig";
		$search_ignore[] = "ende";
		$search_ignore[] = "entsprechend";
		$search_ignore[] = "entweder";
		$search_ignore[] = "ergänze";
		$search_ignore[] = "ergänzen";
		$search_ignore[] = "ergänzte";
		$search_ignore[] = "ergänzten";
		$search_ignore[] = "erhalten";
		$search_ignore[] = "erhielt";
		$search_ignore[] = "erhielten";
		$search_ignore[] = "erhält";
		$search_ignore[] = "erneut";
		$search_ignore[] = "erst";
		$search_ignore[] = "erste";
		$search_ignore[] = "ersten";
		$search_ignore[] = "erster";
		$search_ignore[] = "eröffne";
		$search_ignore[] = "eröffnen";
		$search_ignore[] = "eröffnet";
		$search_ignore[] = "eröffnete";
		$search_ignore[] = "eröffnetes";
		$search_ignore[] = "etc";
		$search_ignore[] = "etliche";
		$search_ignore[] = "etwa";
		$search_ignore[] = "fall";
		$search_ignore[] = "falls";
		$search_ignore[] = "fand";
		$search_ignore[] = "fast";
		$search_ignore[] = "ferner";
		$search_ignore[] = "finden";
		$search_ignore[] = "findest";
		$search_ignore[] = "findet";
		$search_ignore[] = "folgende";
		$search_ignore[] = "folgenden";
		$search_ignore[] = "folgender";
		$search_ignore[] = "folgendes";
		$search_ignore[] = "folglich";
		$search_ignore[] = "fordern";
		$search_ignore[] = "fordert";
		$search_ignore[] = "forderte";
		$search_ignore[] = "forderten";
		$search_ignore[] = "fortsetzen";
		$search_ignore[] = "fortsetzt";
		$search_ignore[] = "fortsetzte";
		$search_ignore[] = "fortsetzten";
		$search_ignore[] = "fragte";
		$search_ignore[] = "frau";
		$search_ignore[] = "frei";
		$search_ignore[] = "freie";
		$search_ignore[] = "freier";
		$search_ignore[] = "freies";
		$search_ignore[] = "fuer";
		$search_ignore[] = "fünf";
		$search_ignore[] = "gab";
		$search_ignore[] = "ganzem";
		$search_ignore[] = "gar";
		$search_ignore[] = "gbr";
		$search_ignore[] = "geb";
		$search_ignore[] = "geben";
		$search_ignore[] = "geblieben";
		$search_ignore[] = "gebracht";
		$search_ignore[] = "gedurft";
		$search_ignore[] = "geehrt";
		$search_ignore[] = "geehrte";
		$search_ignore[] = "geehrten";
		$search_ignore[] = "geehrter";
		$search_ignore[] = "gefallen";
		$search_ignore[] = "gefiel";
		$search_ignore[] = "gefälligst";
		$search_ignore[] = "gefällt";
		$search_ignore[] = "gegeben";
		$search_ignore[] = "gehabt";
		$search_ignore[] = "gehen";
		$search_ignore[] = "geht";
		$search_ignore[] = "gekommen";
		$search_ignore[] = "gekonnt";
		$search_ignore[] = "gemocht";
		$search_ignore[] = "gemäss";
		$search_ignore[] = "genommen";
		$search_ignore[] = "genug";
		$search_ignore[] = "gern";
		$search_ignore[] = "gestern";
		$search_ignore[] = "gestrige";
		$search_ignore[] = "getan";
		$search_ignore[] = "geteilt";
		$search_ignore[] = "geteilte";
		$search_ignore[] = "getragen";
		$search_ignore[] = "gewissermaßen";
		$search_ignore[] = "geworden";
		$search_ignore[] = "ggf";
		$search_ignore[] = "gib";
		$search_ignore[] = "gibt";
		$search_ignore[] = "gleich";
		$search_ignore[] = "gleichwohl";
		$search_ignore[] = "gleichzeitig";
		$search_ignore[] = "glücklicherweise";
		$search_ignore[] = "gmbh";
		$search_ignore[] = "gratulieren";
		$search_ignore[] = "gratuliert";
		$search_ignore[] = "gratulierte";
		$search_ignore[] = "gute";
		$search_ignore[] = "guten";
		$search_ignore[] = "gängig";
		$search_ignore[] = "gängige";
		$search_ignore[] = "gängigen";
		$search_ignore[] = "gängiger";
		$search_ignore[] = "gängiges";
		$search_ignore[] = "gänzlich";
		$search_ignore[] = "haette";
		$search_ignore[] = "halb";
		$search_ignore[] = "hallo";
		$search_ignore[] = "hast";
		$search_ignore[] = "hattest";
		$search_ignore[] = "hattet";
		$search_ignore[] = "heraus";
		$search_ignore[] = "herein";
		$search_ignore[] = "heute";
		$search_ignore[] = "heutige";
		$search_ignore[] = "hiermit";
		$search_ignore[] = "hiesige";
		$search_ignore[] = "hinein";
		$search_ignore[] = "hinten";
		$search_ignore[] = "hinterher";
		$search_ignore[] = "hoch";
		$search_ignore[] = "hundert";
		$search_ignore[] = "hätt";
		$search_ignore[] = "hätte";
		$search_ignore[] = "hätten";
		$search_ignore[] = "höchstens";
		$search_ignore[] = "igitt";
		$search_ignore[] = "immer";
		$search_ignore[] = "immerhin";
		$search_ignore[] = "important";
		$search_ignore[] = "indessen";
		$search_ignore[] = "info";
		$search_ignore[] = "infolge";
		$search_ignore[] = "innen";
		$search_ignore[] = "innerhalb";
		$search_ignore[] = "insofern";
		$search_ignore[] = "inzwischen";
		$search_ignore[] = "irgend";
		$search_ignore[] = "irgendeine";
		$search_ignore[] = "irgendwas";
		$search_ignore[] = "irgendwen";
		$search_ignore[] = "irgendwer";
		$search_ignore[] = "irgendwie";
		$search_ignore[] = "irgendwo";
		$search_ignore[] = "je";
		$search_ignore[] = "jedenfalls";
		$search_ignore[] = "jederlei";
		$search_ignore[] = "jedoch";
		$search_ignore[] = "jemand";
		$search_ignore[] = "jenseits";
		$search_ignore[] = "jährig";
		$search_ignore[] = "jährige";
		$search_ignore[] = "jährigen";
		$search_ignore[] = "jähriges";
		$search_ignore[] = "kam";
		$search_ignore[] = "kannst";
		$search_ignore[] = "kaum";
		$search_ignore[] = "keines";
		$search_ignore[] = "keinerlei";
		$search_ignore[] = "keineswegs";
		$search_ignore[] = "klar";
		$search_ignore[] = "klare";
		$search_ignore[] = "klaren";
		$search_ignore[] = "klares";
		$search_ignore[] = "klein";
		$search_ignore[] = "kleinen";
		$search_ignore[] = "kleiner";
		$search_ignore[] = "kleines";
		$search_ignore[] = "koennen";
		$search_ignore[] = "koennt";
		$search_ignore[] = "koennte";
		$search_ignore[] = "koennten";
		$search_ignore[] = "komme";
		$search_ignore[] = "kommen";
		$search_ignore[] = "kommt";
		$search_ignore[] = "konkret";
		$search_ignore[] = "konkrete";
		$search_ignore[] = "konkreten";
		$search_ignore[] = "konkreter";
		$search_ignore[] = "konkretes";
		$search_ignore[] = "konnten";
		$search_ignore[] = "könn";
		$search_ignore[] = "könnt";
		$search_ignore[] = "könnten";
		$search_ignore[] = "künftig";
		$search_ignore[] = "lag";
		$search_ignore[] = "lagen";
		$search_ignore[] = "langsam";
		$search_ignore[] = "lassen";
		$search_ignore[] = "laut";
		$search_ignore[] = "lediglich";
		$search_ignore[] = "leer";
		$search_ignore[] = "legen";
		$search_ignore[] = "legte";
		$search_ignore[] = "legten";
		$search_ignore[] = "leicht";
		$search_ignore[] = "leider";
		$search_ignore[] = "lesen";
		$search_ignore[] = "letze";
		$search_ignore[] = "letzten";
		$search_ignore[] = "letztendlich";
		$search_ignore[] = "letztens";
		$search_ignore[] = "letztes";
		$search_ignore[] = "letztlich";
		$search_ignore[] = "lichten";
		$search_ignore[] = "liegt";
		$search_ignore[] = "liest";
		$search_ignore[] = "links";
		$search_ignore[] = "längst";
		$search_ignore[] = "längstens";
		$search_ignore[] = "mag";
		$search_ignore[] = "magst";
		$search_ignore[] = "mal";
		$search_ignore[] = "mancherorts";
		$search_ignore[] = "manchmal";
		$search_ignore[] = "mann";
		$search_ignore[] = "margin";
		$search_ignore[] = "mehr";
		$search_ignore[] = "mehrere";
		$search_ignore[] = "meist";
		$search_ignore[] = "meiste";
		$search_ignore[] = "meisten";
		$search_ignore[] = "meta";
		$search_ignore[] = "mindestens";
		$search_ignore[] = "mithin";
		$search_ignore[] = "mochte";
		$search_ignore[] = "morgen";
		$search_ignore[] = "morgige";
		$search_ignore[] = "muessen";
		$search_ignore[] = "muesst";
		$search_ignore[] = "musst";
		$search_ignore[] = "mussten";
		$search_ignore[] = "muß";
		$search_ignore[] = "mußt";
		$search_ignore[] = "möchte";
		$search_ignore[] = "möchten";
		$search_ignore[] = "möchtest";
		$search_ignore[] = "mögen";
		$search_ignore[] = "möglich";
		$search_ignore[] = "mögliche";
		$search_ignore[] = "möglichen";
		$search_ignore[] = "möglicher";
		$search_ignore[] = "möglicherweise";
		$search_ignore[] = "müssen";
		$search_ignore[] = "müsste";
		$search_ignore[] = "müssten";
		$search_ignore[] = "müßte";
		$search_ignore[] = "nachdem";
		$search_ignore[] = "nacher";
		$search_ignore[] = "nachhinein";
		$search_ignore[] = "nahm";
		$search_ignore[] = "natürlich";
		$search_ignore[] = "nacht";
		$search_ignore[] = "neben";
		$search_ignore[] = "nebenan";
		$search_ignore[] = "nehmen";
		$search_ignore[] = "nein";
		$search_ignore[] = "neu";
		$search_ignore[] = "neue";
		$search_ignore[] = "neuem";
		$search_ignore[] = "neuen";
		$search_ignore[] = "neuer";
		$search_ignore[] = "neues";
		$search_ignore[] = "neun";
		$search_ignore[] = "nie";
		$search_ignore[] = "niemals";
		$search_ignore[] = "niemand";
		$search_ignore[] = "nimm";
		$search_ignore[] = "nimmer";
		$search_ignore[] = "nimmt";
		$search_ignore[] = "nirgends";
		$search_ignore[] = "nirgendwo";
		$search_ignore[] = "nutzen";
		$search_ignore[] = "nutzt";
		$search_ignore[] = "nutzung";
		$search_ignore[] = "nächste";
		$search_ignore[] = "nämlich";
		$search_ignore[] = "nötigenfalls";
		$search_ignore[] = "nützt";
		$search_ignore[] = "oben";
		$search_ignore[] = "oberhalb";
		$search_ignore[] = "obgleich";
		$search_ignore[] = "obschon";
		$search_ignore[] = "obwohl";
		$search_ignore[] = "oft";
		$search_ignore[] = "per";
		$search_ignore[] = "pfui";
		$search_ignore[] = "plötzlich";
		$search_ignore[] = "pro";
		$search_ignore[] = "reagiere";
		$search_ignore[] = "reagieren";
		$search_ignore[] = "reagiert";
		$search_ignore[] = "reagierte";
		$search_ignore[] = "rechts";
		$search_ignore[] = "regelmäßig";
		$search_ignore[] = "rief";
		$search_ignore[] = "rund";
		$search_ignore[] = "sang";
		$search_ignore[] = "sangen";
		$search_ignore[] = "schlechter";
		$search_ignore[] = "schließlich";
		$search_ignore[] = "schnell";
		$search_ignore[] = "schon";
		$search_ignore[] = "schreibe";
		$search_ignore[] = "schreiben";
		$search_ignore[] = "schreibens";
		$search_ignore[] = "schreiber";
		$search_ignore[] = "schwierig";
		$search_ignore[] = "schätzen";
		$search_ignore[] = "schätzt";
		$search_ignore[] = "schätzte";
		$search_ignore[] = "schätzten";
		$search_ignore[] = "sechs";
		$search_ignore[] = "sect";
		$search_ignore[] = "sehrwohl";
		$search_ignore[] = "sei";
		$search_ignore[] = "seit";
		$search_ignore[] = "seitdem";
		$search_ignore[] = "seite";
		$search_ignore[] = "seiten";
		$search_ignore[] = "seither";
		$search_ignore[] = "selber";
		$search_ignore[] = "senke";
		$search_ignore[] = "senken";
		$search_ignore[] = "senkt";
		$search_ignore[] = "senkte";
		$search_ignore[] = "senkten";
		$search_ignore[] = "setzen";
		$search_ignore[] = "setzt";
		$search_ignore[] = "setzte";
		$search_ignore[] = "setzten";
		$search_ignore[] = "sicherlich";
		$search_ignore[] = "sieben";
		$search_ignore[] = "siebte";
		$search_ignore[] = "siehe";
		$search_ignore[] = "sieht";
		$search_ignore[] = "singen";
		$search_ignore[] = "singt";
		$search_ignore[] = "sobald";
		$search_ignore[] = "sodaß";
		$search_ignore[] = "soeben";
		$search_ignore[] = "sofern";
		$search_ignore[] = "sofort";
		$search_ignore[] = "sog";
		$search_ignore[] = "sogar";
		$search_ignore[] = "solange";
		$search_ignore[] = "solc hen";
		$search_ignore[] = "solch";
		$search_ignore[] = "sollen";
		$search_ignore[] = "sollst";
		$search_ignore[] = "sollt";
		$search_ignore[] = "sollten";
		$search_ignore[] = "solltest";
		$search_ignore[] = "somit";
		$search_ignore[] = "sonstwo";
		$search_ignore[] = "sooft";
		$search_ignore[] = "soviel";
		$search_ignore[] = "soweit";
		$search_ignore[] = "sowie";
		$search_ignore[] = "sowohl";
		$search_ignore[] = "spielen";
		$search_ignore[] = "später";
		$search_ignore[] = "startet";
		$search_ignore[] = "startete";
		$search_ignore[] = "starteten";
		$search_ignore[] = "statt";
		$search_ignore[] = "stattdessen";
		$search_ignore[] = "steht";
		$search_ignore[] = "steige";
		$search_ignore[] = "steigen";
		$search_ignore[] = "steigt";
		$search_ignore[] = "stets";
		$search_ignore[] = "stieg";
		$search_ignore[] = "stiegen";
		$search_ignore[] = "such";
		$search_ignore[] = "suchen";
		$search_ignore[] = "sämtliche";
		$search_ignore[] = "tages";
		$search_ignore[] = "tat";
		$search_ignore[] = "tatsächlich";
		$search_ignore[] = "tatsächlichen";
		$search_ignore[] = "tatsächlicher";
		$search_ignore[] = "tatsächliches";
		$search_ignore[] = "tausend";
		$search_ignore[] = "teile";
		$search_ignore[] = "teilen";
		$search_ignore[] = "teilte";
		$search_ignore[] = "teilten";
		$search_ignore[] = "titel";
		$search_ignore[] = "total";
		$search_ignore[] = "trage";
		$search_ignore[] = "tragen";
		$search_ignore[] = "trotzdem";
		$search_ignore[] = "trug";
		$search_ignore[] = "trägt";
		$search_ignore[] = "tun";
		$search_ignore[] = "tust";
		$search_ignore[] = "tut";
		$search_ignore[] = "txt";
		$search_ignore[] = "tät";
		$search_ignore[] = "ueber";
		$search_ignore[] = "umso";
		$search_ignore[] = "unbedingt";
		$search_ignore[] = "ungefähr";
		$search_ignore[] = "unmöglich";
		$search_ignore[] = "unmögliche";
		$search_ignore[] = "unmöglichen";
		$search_ignore[] = "unmöglicher";
		$search_ignore[] = "unnötig";
		$search_ignore[] = "unsem";
		$search_ignore[] = "unser";
		$search_ignore[] = "unsere";
		$search_ignore[] = "unserem";
		$search_ignore[] = "unseren";
		$search_ignore[] = "unserer";
		$search_ignore[] = "unseres";
		$search_ignore[] = "unten";
		$search_ignore[] = "unterbrach";
		$search_ignore[] = "unterbrechen";
		$search_ignore[] = "unterhalb";
		$search_ignore[] = "unwichtig";
		$search_ignore[] = "usw";
		$search_ignore[] = "vergangen";
		$search_ignore[] = "vergangene";
		$search_ignore[] = "vergangener";
		$search_ignore[] = "vergangenes";
		$search_ignore[] = "vermag";
		$search_ignore[] = "vermutlich";
		$search_ignore[] = "vermögen";
		$search_ignore[] = "verrate";
		$search_ignore[] = "verraten";
		$search_ignore[] = "verriet";
		$search_ignore[] = "verrieten";
		$search_ignore[] = "version";
		$search_ignore[] = "versorge";
		$search_ignore[] = "versorgen";
		$search_ignore[] = "versorgt";
		$search_ignore[] = "versorgte";
		$search_ignore[] = "versorgten";
		$search_ignore[] = "versorgtes";
		$search_ignore[] = "veröffentlichen";
		$search_ignore[] = "veröffentlicher";
		$search_ignore[] = "veröffentlicht";
		$search_ignore[] = "veröffentlichte";
		$search_ignore[] = "veröffentlichten";
		$search_ignore[] = "veröffentlichtes";
		$search_ignore[] = "viele";
		$search_ignore[] = "vielen";
		$search_ignore[] = "vieler";
		$search_ignore[] = "vieles";
		$search_ignore[] = "vielleicht";
		$search_ignore[] = "vielmals";
		$search_ignore[] = "vier";
		$search_ignore[] = "vollständig";
		$search_ignore[] = "voran";
		$search_ignore[] = "vorbei";
		$search_ignore[] = "vorgestern";
		$search_ignore[] = "vorher";
		$search_ignore[] = "vorne";
		$search_ignore[] = "vorüber";
		$search_ignore[] = "völlig";
		$search_ignore[] = "während";
		$search_ignore[] = "wachen";
		$search_ignore[] = "waere";
		$search_ignore[] = "warum";
		$search_ignore[] = "weder";
		$search_ignore[] = "wegen";
		$search_ignore[] = "weitere";
		$search_ignore[] = "weiterem";
		$search_ignore[] = "weiteren";
		$search_ignore[] = "weiterer";
		$search_ignore[] = "weiteres";
		$search_ignore[] = "weiterhin";
		$search_ignore[] = "weiß";
		$search_ignore[] = "wem";
		$search_ignore[] = "wen";
		$search_ignore[] = "wenig";
		$search_ignore[] = "wenige";
		$search_ignore[] = "weniger";
		$search_ignore[] = "wenigstens";
		$search_ignore[] = "wenngleich";
		$search_ignore[] = "wer";
		$search_ignore[] = "werdet";
		$search_ignore[] = "weshalb";
		$search_ignore[] = "wessen";
		$search_ignore[] = "wichtig";
		$search_ignore[] = "wieso";
		$search_ignore[] = "wieviel";
		$search_ignore[] = "wiewohl";
		$search_ignore[] = "willst";
		$search_ignore[] = "wirklich";
		$search_ignore[] = "wodurch";
		$search_ignore[] = "wogegen";
		$search_ignore[] = "woher";
		$search_ignore[] = "wohin";
		$search_ignore[] = "wohingegen";
		$search_ignore[] = "wohl";
		$search_ignore[] = "wohlweislich";
		$search_ignore[] = "womit";
		$search_ignore[] = "woraufhin";
		$search_ignore[] = "woraus";
		$search_ignore[] = "worin";
		$search_ignore[] = "wurde";
		$search_ignore[] = "wurden";
		$search_ignore[] = "währenddessen";
		$search_ignore[] = "wär";
		$search_ignore[] = "wäre";
		$search_ignore[] = "wären";
		$search_ignore[] = "zahlreich";
		$search_ignore[] = "zehn";
		$search_ignore[] = "zeitweise";
		$search_ignore[] = "ziehen";
		$search_ignore[] = "zieht";
		$search_ignore[] = "zog";
		$search_ignore[] = "zogen";
		$search_ignore[] = "zudem";
		$search_ignore[] = "zuerst";
		$search_ignore[] = "zufolge";
		$search_ignore[] = "zugleich";
		$search_ignore[] = "zuletzt";
		$search_ignore[] = "zumal";
		$search_ignore[] = "zurück";
		$search_ignore[] = "zusammen";
		$search_ignore[] = "zuviel";
		$search_ignore[] = "zwanzig";
		$search_ignore[] = "zwei";
		$search_ignore[] = "zwölf";
		$search_ignore[] = "ähnlich";
		$search_ignore[] = "übel";
		$search_ignore[] = "überall";
		$search_ignore[] = "überallhin";
		$search_ignore[] = "überdies";
		$search_ignore[] = "übermorgen";
		$search_ignore[] = "übrig";
		$search_ignore[] = "übrigens";

		return $search_ignore;
	}

	/**
	 * Returns the lower length limit of search words
	 *
	 * @return  integer  The lower length limit of search words.
	 *
	 * @since   1.6
	 */
	public static function getLowerLimitSearchWord()
	{
		return 3;
	}

	/**
	 * Returns the upper length limit of search words
	 *
	 * @return  integer  The upper length limit of search words.
	 *
	 * @since   1.6
	 */
	public static function getUpperLimitSearchWord()
	{
		return 20;
	}

	/**
	 * Returns the number of chars to display when searching
	 *
	 * @return  integer  The number of chars to display when searching.
	 *
	 * @since   1.6
	 */
	public static function getSearchDisplayedCharactersNumber()
	{
		return 200;
	}
}
