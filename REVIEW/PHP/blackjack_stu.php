<?php
//-----------------------------------------------------------------
// 파일명 : blackjack_stu.php (쌤꺼 따라쓰면서 이해하기)
// 기능   : 블랙잭 게임 (터미널에서 입력값을 받아서 게임 진행)
// 이력   : v001 - new - Mihyeon Kim
//-----------------------------------------------------------------
define( "FILE_NAME_DECK", "999_2_deck.txt" );
define( "FILE_NAME_HAND", "999_2_hand.txt" );
define( "STR_CARD_NUM", "card_num");
define( "STR_CARD_SHAPE_KEY", "card_shape_key" );
define( "FLG_DEBUG" ,false );

// 카드 클래스
// 카드 정렬, 각 카드에 점수 부여, 
class Card
{
    private $arr_card_num;
    private $arr_card_shape;
    public function __construct()
    {
        $this->arr_card_num     = array( "A", "2", "3", "4", "5", "6", "7", "8", "9", "10" , "K","Q","J"  );
        $this->arr_card_shape   = array( "♥", "◆", "♣", "♠");
    }

    
    // 함수 : 카드별 점수 주기 
    public function get_card_num_score( $param_num, $param_score )
    {
        switch ( $param_num )
        // break 안쓴 이유 물어보기
        {
            case "J":       // J,Q,K 는 점수 10점
            case "Q":
            case "K":
                return 10;
                // return을 하면 함수가 종료되고 이 값을 주기 때문에 break없어도 됨
                
            case "A":       // A가 $param_num가 10점이 넘을 경우에는 1점을 반환하고
                            // 그게 아니면 11점 반환
                if($param_score > 10)
                {
                    return 1;
                    
                }
                else
                {
                    return 11;
                    
                }
            default:
                return (int)$param_num;  
                   // 문자인 $param_num를 int로 변환한다. 
        }
    }

    public function get_card_shape( $param_key )
    {
        return $this->arr_card_shape[$param_key];
    }

    public function get_arr_card_num()
    {
        return $this->arr_card_num;
    }

    public function get_arr_card_shape()
    {
        return $this->arr_card_shape;
    }

    public function get_cnt_card()
    {
        return $this->cnt_card;
    }
}


// 각 카드를 섞어서 카드 한장을 파라미터로 주는 클래스 만들기 
class Deck
{
    private $arr_deck;      // 덱 
    private $cnt_deck;      // 덱 카운트
    private $size_deck;     // 덱 사이즈 

    public function __construct()
    {
        $obj_card = new Card();
        $this->set_deck( $obj_card->get_arr_card_num(), $obj_card->get_arr_card_shape());
        $this->cnt_deck = 0;
        $this->size_deck = sizeof($this->arr_deck);
        // sizeof() : 배열의 크기를 반환하는 함수  sizeof( $array, $mode )
                                        // $mode : 선택적 -  sizeof 함수에서 반환되는 값에대한 형식을 지정 
        $obj_card = null;
    }

    // --------------------------------------------
    // 메소드 명    : set_deck
    // 기능         : deck 을 랜덤으로 셋팅
    //          배열 depth 1: 인덱스 배열 / depth 2 : 연상배열
    // 파라미터     : array     $param_arr_card_num
                    //   array     $param_arr_card_shape
    // 리턴값       : X
    // -----------------------------------------------
    private function set_deck($param_arr_card_num, $param_arr_card_shape)
    {
        // 카드 52장을 셋팅한다. 
        
        foreach($param_arr_card_shape as $shape_key => $shape_num)
        {
            foreach($param_arr_card_num as $num)
            {
            // arr_deck 배열의 원소값에 추가 
                $this->arr_deck[] = array( STR_CARD_NUM => $num, STR_CARD_SHAPE_KEY => $shape_key);
            }
        }
        // 덱 섞음
        shuffle( $this->arr_deck );

        // DEBUG****************************************
        // FLG_DEBUG가 참이면 디버그 실행
        if( FLG_DEBUG )
        {
            // ***Debug 클래스 가져와서 실행 
            DebugBJ::put_file(FILE_NAME_DECK, $this->arr_deck,"w");
        }
    }

    //-------------------------------------------------------
    // 메소드명         : give_card
    // 기능             : 덱에서 카드 한장을 파라미터에 추가함
    // 파라미터         :X
    // 리턴값           : (Array) card/ false
    //---------------------------------------------------------
    public function give_card()
    {
        if($this->cnt_deck === $this->size_deck)
        {
            return false;
        }
        // $arr_deck에 있는 배열의 원소를 $card로 옮김 
        $card = array_shift( $this->arr_deck);
        $this->cnt_deck++;
        return $card;
    }
}

// Player 클래스 : 게임을 진행하고 있는 플레이어 (여기선 컴퓨터와 유저)
class Player 
{
    private $hand;      // 뽑는 사람
    private $score;     // 점수
    private $obj_card;  // card 클래스 
    protected $player_name;         // 상속됨

    public function __construct()
    {
        $this->hand = array();
        $this->score = 0;
        $this->obj_card = new Card();
    }

    // 카드 오픈하는 함수
    public function print_open_card()
    {
        $str = $this->player_name;
        foreach( $this->hand as $card )
        {
            $str .=$this->obj_card->get_card_shape($card[STR_CARD_SHAPE_KEY]).$card[STR_CARD_NUM]."  ";
        }
        echo $str;
    }

    public function clear_var()
    {
        $this->hand = array();
        $this->score = 0;
    }

    public function set_score ($param_score)
    {
        $this->score += $param_score;
    }

    public function get_score()
    {
        return $this->score;
    }
    
    public function set_var(&$param_obj_deck)
    {
        $arr_card = $param_obj_deck->give_card();
        $this->hand[] = $arr_card;
        $this->set_score( $this->obj_card->get_card_num_score($arr_card[STR_CARD_NUM], $this->get_score() ) );
        // DEBUG****************************************
        // FLG_DEBUG가 참이면 디버그 실행
        if( FLG_DEBUG )
        {
            // ***Debug 클래스 가져와서 실행 
            DebugBJ::put_file(FILE_NAME_HAND, $this->arr_card,"a");
        }
    }

    public function get_hand()
    {
        return $this->hand;
    }
}

// Player 클래스에 상속된 User 클래스

class User extends Player
{
    // player class의 __construct 상속
    // player class의 player_name 변수 USER : 
    public function __construct()
    {
        parent::_construct();
        $this->player_name = "USER : ";
    }
}

// Player 클래스에 상속된 dealer 클래스

class Dealer extends Player
{
    // player class의 __construct 상속
    // player class의 player_name 변수 USER : 
    public function __construct()
    {
        parent::__construct();
        $this->player_name = "DEALER : ";
    }

    // 딜러가 2장 뽑았을 때 17점 미만일 경우 카드를 한장 더 뽑는다. 
    public function set_var(&$param_obj_deck)
    {
        if($this->get_score() <17)
        {
            parent::set_var( $param_obj_deck);
        }
    }
}

// 게임 플레이 class
class Play
{
    private $obj_user;      // user class
    private $obj_dealer;    // dealer class
    private $obj_deck;      // deck class

    public function __construct()
    {
        $this->obj_user = new User();
        $this->obj_dealer = new Dealer();
        $this->obj_deck = new Deck();
    }

    //----------------------------------------------------
    // 메소드명  : set_card    
    // 기능      : 카드 분배
    // 파라미터  : X
    // 리턴값    : X
    //----------------------------------------------------

    public function set_card()
    {
        // 카드가 한장이라도 있으면 1장 만 주고
        if( sizeof( $this->obj_user->get_hand()) > 0)
        {
        $this->obj_user->set_var( $this->obj_deck);
        }
        // 아니면 두장씩 준다. (제일 처음 카드를 주는 부분)
        else
        {
            $this->obj_user->set_var($this->obj_deck);
            $this->obj_dealer->set_var($this->obj_deck);
            $this->obj_user->set_var($this->obj_deck);
            $this->obj_dealer->set_var($this->obj_deck);
        }
    }

    // 유저와 딜러의 점수 확인하고 승부
    public function chk_score()
    {
        $user_score = $this->obj_user->get_score();
        $dealer_score = $this->obj_dealer->get_score();
        $flg_burst = false;
        $arr_player = array();
        $str_con = "";

        // user와 dealer 둘 다 21점이 넘을 경우
        if( $user_score >21 && $dealer_score > 21)
        {
            $arr_player[] = "User";
            $arr_player[] = "Dealer";
            $int_result = 0;
            $str_con = "Burst";
            $flg_burst = true;
        }
        // 유저만 21점이 넘었을 경우 
        else if( $user_score >21 )
        {
            $arr_player[] = "User";
            $int_result = 2;
            $str_con = "Burst";
            $flg_burst = true;
        }
        // 딜러만 21점이 넘었을 경우
        else if( $dealer_score >21 )
        {
            $arr_player[] = "Dealer";
            $int_result = 1;
            $str_con = "Burst";
            $flg_burst = true;
        }
        // 유저 21점일 경우 블랙잭
        else if( $user_score === 21)
        {
            $arr_player[] = "User";
            $int_result = 2;
            $str_con = "Black Jack!!";
            $flg_burst = "true";
        }
        if($flg_burst)
        {
            $this->print_result($arr_player,$int_result,$str_con);
        }
    }

    public function print_result($param_arr,$param_int_result,$param_str_con)
    {
        $str = implode(", ", $param_arr)."  ";
        switch($param_int_result)
        {
            case 0:
                $str .=$param_str_con.", 무승부 입니다.\n";
                break;
            case 1:
                $str.=$param_str_con.", 승리하였습니다.\n";
                break;
            case 2:
                $str.=$param_str_con.", 패배하였습니다.\n";
                break;
        }

        echo $str;
        $this->obj_user->print_open_card();
        echo " / ";
        $this->obj_dealer->print_open_card();
        echo "\n";
    }

    public function open_player_card()
    {
        $this->obj_user->print_open_card();
        if ( FLG_DEBUG )
        {
            $this->obj_dealer->print_open_card();
        }
        echo "\n";
    }

    public function clare_player_card()
    {
        $this->obj_user->clear_var();
        $this->obj_dealer->clear_var();
    }

    // 게임 시작 
    public function game_start()
    {
        echo "---------- BlackJack start ----------\n";
        // game class set_card 함수 실행
        $this->set_card();
                //     public function set_card()
                // {
                // 	if( sizeof( $this->obj_user->get_hand() ) > 0 )
                // 	{
                //      카드가 한장 이상 있을 때 플레이어와 딜러에게 한장씩
                // 		$this->obj_user->set_var( $this->obj_deck );
                // 		$this->obj_dealer->set_var( $this->obj_deck );
                // 	}
                // 	else
                // 	{
                    // 게임 처음 시작 했을 때 
                // 		$this->obj_user->set_var( $this->obj_deck );
                // 		$this->obj_dealer->set_var( $this->obj_deck );
                // 		$this->obj_user->set_var( $this->obj_deck );
                // 		$this->obj_dealer->set_var( $this->obj_deck );
                // 	}
                // }
        $flg_clare_card = false;
        // game class open_player_card 함수 실행
                //     $this->open_player_card();
                //     public function open_player_card()
                // {
                // 	$this->obj_user->print_open_card();
                                        // public function print_open_card()
                                        // {
                                        //     $str = $this->player_name;
                                        //     foreach( $this->hand as $card )
                                        //     {
                                        //         $str .= $this->obj_card->get_card_shape($card[STR_CARD_SHAPE_KEY]).$card[STR_CARD_NUM]." ";
                                        //     }
                                        //     echo $str;
                                        // }


                // 	// ************** DEBUG **************
                // 	if( FLG_DEBUG )
                // 	{
                // 		$this->obj_dealer->print_open_card();
                // 	}
                // 	// ************** DEBUG **************

                // 	echo "\n";
                // }
        while(true)
        {
            fscanf(STDIN, "%d", $inplut);
            echo " 입력값 : $input \n";

            if( $flg_clare_card )
            {
                $this->set_card();
                $flg_clare_card = false;
                if( $this->chk_score())
                {
                    $this->clare_player_card();
                    $flg_clare_card = true;
                }
                else
                {
                    $this->open_player_card();
                }
            }

            // 카드 한장 더 받기 
            if( $input === 1 )
            {
                $this->set_card();
                $this->open_player_card();
                if( $this->chk_score() )
                {
                    $this->clare_player_card();
                    $flg_clare_card = true;
                    // if( $flg_clare_card ) 실행됨
                } 
            }

            // 비교하기 
            else if ( $input === 2)
            {
                if( !$this->chk_score() )
                {
                    $this->chk_result();
                }
                $this->clare_player_card();
                $flg_clare_card = true;
                // 위에 if( $flg_clare_card ) 실행됨
            }
            // 종료 
            else if( $input === 0 )
            {
                break;
            }
            // 디버그 확인용 
            else if( $input === 90 )
            {
                if( FLG_DEBUG )
                {
                    DebugBJ::delete_file();
                    break;
                }
            }
            else{
                echo "잘못 입력하셨습니다.\n";
                $input = 1;
            }
            print "\n";
        }
        echo "끝";
    }
}

$obj_play = new Play();
$obj_play->game_start();



// ************** DEBUG **************
class DebugBJ
{
	public static function put_file( $param_file_name, $param_arr, $param_mode )
	{
		$fh = fopen( $param_file_name, $param_mode );
		fputs( $fh, DebugBJ::arr_to_string( $param_arr ) );
		fclose( $fh );
	}

	public static function arr_to_string( $param_arr )
	{
		$str = "";
		foreach( $param_arr as $key => $val )
		{
			if( is_array( $val ) )
			{
				$str .= DebugBJ::arr_to_string( $val );
			}
			else
			{
				$str .= $key." : ".$val."\n";
			}
		}
		return $str;
	}

	public static function delete_file()
	{
		unlink(FILE_NAME_HAND);
		unlink(FILE_NAME_DECK);
	}
}
// ************** DEBUG **************
?>