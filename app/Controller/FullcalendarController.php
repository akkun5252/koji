<?php
class FullcalendarController extends AppController {
	function index() {
	}
	function fcfeed(){
		// start/endをSQL用に編集
		$mysqlstart = date( 'Y-m-d H:i:s', $this->params['url']['STARTDATE']);
		$mysqlend   = date( 'Y-m-d H:i:s', $this->params['url']['ENDDATE']);
		// SQL
		$conditions = array( 'Event.STARTDATE BETWEEN ? AND ?' => array( $mysqlstart, $mysqlend));
		$events = $this->Event->find( 'all', array( 'conditions' => $conditions));

		// SQLのレスポンスをもとにデータ作成
		$rows = array();
		for ( $a=0; count( $events) > $a; $a++) {
			$rows[] = array(
					'id' => $events[$a]['Event']['TASKID'],
					'title' => $events[$a]['Event']['TASKNAME'],
					'start' => date( 'Y-m-d H:i', strtotime($events[$a]['Event']['STARTDATE'])),
					'end' => date( 'Y-m-d H:i', strtotime($events[$a]['Event']['ENDDATE'])),
					//'allDay' => $events[$a]['Event']['allday'],
			);
		}
		// JSONへ変換
		echo json_encode( $rows);
	}
}
?>
