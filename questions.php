<?php
    include('connect.php');
    $sql = $conn->prepare("SELECT * FROM ds_cau_hoi ORDER BY RAND() LIMIT 5");
    $sql->execute();
    $index = 1;
    $data = '';
    while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
        
        $data.= '<div class = "row" style = "margin-left:10px;">';
        $data.= '<h5 style = "font-weight:bold;"> <span class = "text-danger">Câu '.$index.': </span>'.$result['question'].'</h5>';
        $data.= '<fieldset id = "group'.$index.'">';
        $data.= '<div class="radio col-sm-12">';
        $data.= '<label><input type="radio" class ="rdOptionA" name = "group'.$index.'"><span class = "text-danger">A: </span>'.$result['option_a'].'</label>';
        $data.= '</div>';

        $data.= '<div class="radio col-sm-12">';
        $data.= '<label><input type="radio" class ="rdOptionB" name = "group'.$index.'"><span class = "text-danger">B: </span>'.$result['option_b'].'</label>';
        $data.= '</div>';

        $data.= '<div class="radio col-sm-12">';
        $data.= '<label><input type="radio" class ="rdOptionC" name = "group'.$index.'"><span class = "text-danger">C: </span>'.$result['option_c'].'</label>';
        $data.= '</div>';

        $data.= '<div class="radio col-sm-12">';
        $data.= '<label><input type="radio" class ="rdOptionD" name = "group'.$index.'"><span class = "text-danger">D: </span>'.$result['option_d'].'</label>';
        $data.= '</div>';
        $data.= '</fieldset>';
        $data.= '<input type="hidden" name = "answer" value = "'.$result['answer'].'">';
        $data.= '</div>';
        $index++;

    }
    echo $data;
?>