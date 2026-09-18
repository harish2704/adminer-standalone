<?php
/**
* Use ctrl+alt+click on column header to hide a column and alt+click to make it sticky
* Use ctrl+alt+click or alt+click on first header cell to reset hidden or sticky columns
* @link https://github.com/dungsaga/adminer-plugins/blob/main/hidden-and-sticky-columns.php
* @author Dung.Saga, https://github.com/dungsaga
* @license https://www.gnu.org/licenses/gpl-3.0.html GNU General Public License, version 3
*/
class AdminerHiddenAndStickyColumns extends Adminer\Plugin {

	function tablesPrint($tables) {
	?>
	<style> #menu { z-index: 2 } thead { position: sticky; z-index: 1 } </style>
	<style id='hiddenCols'></style>
	<style id='stickyCols'></style>
	<script <?php echo Adminer\nonce(); ?>>
	document.addEventListener('DOMContentLoaded', () => {
		let stickyCols = []
		let hiddenCols = []
		qsa('#table thead td, #table thead th').forEach((el, i) => { // click on a column header
			el.addEventListener('click', (e) => {
				const col = e.target.cellIndex + 1 // i + 1
				if (e.ctrlKey && e.altKey) { // when ctrl+alt+click
					if (col === 1) hiddenCols = [] // reveal all hidden columns
					else hiddenCols[col] = true // or hide a column
					updateCols(hiddenCols, stickyCols)
					e.stopPropagation()
				} else if (e.altKey) { // when alt+click
					if (col === 1) stickyCols = [] // make all columns non-sticky
					else stickyCols[col] = !stickyCols[col] // or make a column sticky/non-sticky
					updateCols(hiddenCols, stickyCols)
					e.stopPropagation()
				}
			})
		})
		function updateCols(hiddenCols, stickyCols) {
			qs('#hiddenCols').innerHTML = ''
			for (const col in hiddenCols) {
				if (hiddenCols[col]) {
					qs('#hiddenCols').innerHTML += ' #table th:nth-child('+col+'), #table td:nth-child('+col+') { display: none }'
				}
			}
			let left = getComputedStyle(qs('#menu')).position === 'fixed' ? qs('#menu').clientWidth : 0 // avoid overlapping with left sidebar
			const bgColor = getComputedStyle(document.body).backgroundColor // sticky columns need background color (default is transparent)
			qs('#stickyCols').innerHTML = ''
			for (const col in stickyCols) {
				if (stickyCols[col] && !hiddenCols[col]) {
					qs('#stickyCols').innerHTML += ' #table th:nth-child('+col+') { z-index: 1; position: sticky; left: '+left+'px }'
						+' #table td:nth-child('+col+') { background: '+bgColor+'; opacity: 0.9; position: sticky; left: '+left+'px }'
					left += qs('#table th:nth-child('+col+')').clientWidth // continue after current sticky columns
				}
			}
		}
	})
	</script>
	<?php
	}
}
