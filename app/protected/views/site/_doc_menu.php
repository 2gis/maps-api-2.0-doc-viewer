<ul>
    <?php foreach ($menuArr as $value) { ?>
        
        <?php if ($value['children']) { ?>
            <li class="expanded">
            <a href="javascript:void(0)" class="toggler"><span class="toggler-bullet"></span></a>
        <?php } else { ?>
            <li>
        <?php } ?>

            <a href="/doc/<?php echo $value['content']['ru']['uri'] ?>"><?php echo $value['content']['ru']['title']; ?></a>
            
            <?php if ($value['children']) { ?>
                <li class="expanded">
                    <ul>
                        <?php foreach ($value['children'] as $childValue) { ?>
                            <li>
                                <a href="/doc/<?php echo $childValue['content']['ru']['uri'] ?>"><?php echo $childValue['content']['ru']['title']; ?></a></li>
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>
        
        </li>
    <?php } ?>
</ul>