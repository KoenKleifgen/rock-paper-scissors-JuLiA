
import Random
function rock_paper_scissors()
    options = ["rock", "paper", "scissors"]

    while true
        print("Your Move: ")

        player_turn = readline()

        player_turn = lowercase(player_turn)

        opponent_turn = rand(1:3)
       
        opponent_choice = options[opponent_turn]
        
        if player_turn in options

            if player_turn == opponent_choice
                println("Tie, Replay")
            elseif player_turn == "paper" && opponent_choice == "rock"
                println("You, Win")
                break
            elseif player_turn == "scissors" && opponent_choice =="paper"
                println("You, Win")
                break
            elseif player_turn == "rock" && opponent_choice =="scissors"
                println("You, Win")
                break
            else
                println("Computer, Wins")
                break

            end
        end
    end
end

rock_paper_scissors()