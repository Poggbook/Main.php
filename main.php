if($cmd->getName() == "test"){
     if(!$sender instanceof Player){
          $sender->sendMessage("This Command Only Works for players! Please perform this command IN GAME!");
     }else{
          if(!isset($args[0])) { // Check if argument 0 isn't defined.
                $args[0] = 4; // Defining $args[0] with value 4
          }
          $sender->getInventory()->addItem(Item::get(364,0,$args[0]));
          $sender->sendMessage("You have just recieved" .count($args[0]). " steak!");
     }
}
return true;
