<?php
//complete code for models/Poll.class.php
class Poll {
    private string $poll_question = "Default Question";
	private int $yes = 0;
	private int $no = 0;
    public function getPollData() {
        return $this;
    }
	public function getPollQuestion() : string {
		return $this->poll_question;
	}
	public function getYes() : int {
		return $this->yes;
	}
	public function getNo() : int {
		return $this->no;
	}
}
?>
