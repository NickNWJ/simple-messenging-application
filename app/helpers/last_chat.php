<?php 

function lastChat($id_1, $id_2, $conn){
   
   $sql = "SELECT * FROM chats
           WHERE (from_id=? AND to_id=?)
           OR    (to_id=? AND from_id=?)
           ORDER BY chat_id DESC LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id_1, $id_2, $id_1, $id_2]);

    if ($stmt->rowCount() > 0) {
    	$chat = $stmt->fetch();
    }else {
    	$chat = '';
    }
    if ($chat['from_id'] == $id_1) {
        return 'You: '.$chat['message'];
    }
    else {
        return $chat['message'];
    }
    return $chat;
}