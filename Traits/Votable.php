<?php 

trait Votable {

    protected $vote = 3;


    public function setVote($vote){
        if($vote >=1 && $vote <= 5){

            $this->vote = $vote;
        } else {
            throw new Exception('Attenzione, il voto deve essere compreso tra 1 e 5!');
        }
    }


    public function getVote(){
        return $this->vote . ' / 5';
    }
}