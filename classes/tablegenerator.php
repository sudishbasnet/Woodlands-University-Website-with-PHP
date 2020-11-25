<?php
	class TableGenerator{
		private $heading;
		private $tableRow = [];

		public function setHeading($heading){
			$this->heading = $heading;
		}

		public function setRow($tableRow){
			$this->tableRow[] = $tableRow;
		}

		public function generateHTML(){
			$html = '<table class="table table-bordered table-hover">';
			$html .= '<tr>';

			foreach ($this->heading as $headingAsRow) {
				$html .= '<th>' . $headingAsRow . '</th>';
			}

			$html .= '</tr>';
			

			foreach ($this->tableRow as $tableRow) {

				$html .= '<tr>';
				foreach ($tableRow as $keys) {
					$html .= '<td>' . $keys . '</td>';
				}
				$html .= '</tr>';
			}
			
			$html .= '</table>';

			echo $html;

		}
	}
?>