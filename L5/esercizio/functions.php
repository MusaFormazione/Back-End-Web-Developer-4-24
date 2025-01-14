<?php
function getPizze(){
    $json = file_get_contents(__DIR__.'/pizze.json');
    return json_decode($json, true);
}


function jsonToTable(){
    foreach(array_keys(getPizze()[0]) as $key): ?>
        <th><?=$key?></th>
        <?php endforeach;?>
    </thead>
    <tbody>
    <?php foreach(getPizze() as $pizza): ?>
        <tr>
            <?php foreach(array_values($pizza) as $key): ?>
                <td>
                    <?=$key?>
                </td>
            <?php endforeach;?>
        </tr>
    <?php endforeach;
}