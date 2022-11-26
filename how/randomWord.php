<?php 
    function getRandomWord(){
        $quotesArray= array(
            "It’s hard to beat a person who never gives up.",
            "Don’t worry about failure you only have to be right once.",
            "Your most unhappy customers are your greatest source of learning.",
            "Be a Doer, not just a Dreamer." ,
            "In business, you don’t get what you deserve, you get what you negotiate.",
            "If Plan A doesn’t work, the alphabet has 25 more letters.",
            "A small business is an amazing way to serve and leave an impact on the world you live in.",
            "Make something people want includes making a company that people want to work for.",           
            "A big business starts small.",
            "We have a “strategic” plan its called doing things.",
            "Price is what you pay. Value is what you get.",
            "Learn early. Learn often.",
            "Your reputation is more important than your paycheck, and your integrity is worth more than your career",
            "It’s not about ideas. It’s about making ideas happen.",
            "Every day that we spent not improving our products was a wasted day.",
            "Stay away from those people who try to disparage your ambitions. Small minds will always do that, but great minds will give you a feeling that you can become great too."
            ,"It is only when we take chances, when our lives improve. The initial and the most difficult risk that we need to take is to become honest."
            ,"Either you run the day or the day runs you."
            ,"Concentrate all your thoughts upon the work in hand. The sun's rays do not burn until brought to a focus."
            ,"Opportunity is missed by most people because it is dressed in overalls and looks like work."
            ,"Setting goals is the first step in turning the invisible into the visible."
            ,"People often say that motivation doesn’t last. Well, neither does bathing – that’s why we recommend it daily."
            ,"Work until your bank account looks like a phone number."
            ,"Remember, teamwork begins by building trust. And the only way to do that is to overcome our need for invulnerability."
            ,"Opportunities don't happen, you create them."
            ,"There is a vitality, a life force, an energy, a quickening that is translated through you into action, and because there is only one of you in all time, this expression is unique. And if you block it, it will never exist through any other medium and will be lost."
            ,"Take your victories, whatever they may be, cherish them, use them, but don’t settle for them."
            ,"The only way of discovering the limits of the possible is to venture a little way past them into the impossible."
            ,"We need to accept that we won’t always make the right decisions, that we’ll screw up royally sometimes – understanding that failure is not the opposite of success, it’s part of success."
            ,"When everything seems to be going against you, remember that the airplane takes off against the wind, not with it."
            ,"I have not failed. I've just found 10,000 ways that won't work."
            ,"Ideation without execution is delusion."
            ,"And the day came when the risk to remain tight in a bud was more painful than the risk it took to blossom."
            ,"Do not stop thinking of life as an adventure. You have no security unless you can live bravely, excitingly, imaginatively; unless you can choose a challenge instead of competence."
            
        );
        echo $quotesArray[array_rand($quotesArray)];
    }
?>