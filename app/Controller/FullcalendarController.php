<?php
class FullcalendarController extends AppController {
	function index() {
	}
	function fcfeed() {
		// start/endをSQL用に編集
		$psqlstart = date ( 'Y-m-d H:i:s', $this->params ['url'] ['start'] );
		$psqlend = date ( 'Y-m-d H:i:s', $this->params ['url'] ['end'] );
		// SQL
		$conditions = array (
				'Event.start BETWEEN ? AND ?' => array (
						$psqlstart,
						$psqlend
				)
		);
		$events = $this->Event->find ( 'all', array (
				'conditions' => $conditions
		) );

		// SQLのレスポンスをもとにデータ作成
		$rows = array ();
		for($a = 0; count ( $events ) > $a; $a ++) {
			$rows [] = array (
					'id' => $events [$a] ['Event'] ['id'],
					'title' => $events [$a] ['Event'] ['title'],
					'start' => date ( 'Y-m-d H:i', strtotime ( $events [$a] ['Event'] ['start'] ) ),
					'end' => date ( 'Y-m-d H:i', strtotime ( $events [$a] ['Event'] ['end'] ) ),
					'allDay' => $events [$a] ['Event'] ['allday']
			);
		}
		// JSONへ変換
		echo json_encode ( $rows );
	}
}
?>