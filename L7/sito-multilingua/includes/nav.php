<ul class="nav nav-pills">
        <li class="nav-item">
            <a href="index.php?lang=<?=$lang?>" class="nav-link active" aria-current="page">
                <?=$strings['nav']['home']?>
            </a>
        </li>
        <li class="nav-item">
            <a href="contatti.php?lang=<?=$lang?>" class="nav-link">
                <?=$strings['nav']['contatti']?>
            </a>
        </li>
</ul>

<form id="langForm">
    <select name="lang">
        <?=createLangFields()?>
    </select>
</form>