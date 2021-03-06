<?php
/**
 * This View shows a post inside the search
 *
 * @property Post $post is the post object
 *
 * @package humhub.modules.post
 * @since 0.5
 */
?>
<li>
    <a href="<?php echo $this->createUrl('//questionanswer/question/view', array('id' => $question['id'])); ?>">
        <div class="media">
            <div class="media-body">
                <strong><?php echo CHtml::encode($question['post_title']); ?> </strong><br>
                <span class="content" style="border-left:2px solid #ccc; padding-top:2px; padding-bottom:2px; padding-left:5px; margin-left: 5px;"><?php echo CHtml::encode(Helpers::truncateText($answer->post_text, 150)); ?></span>
                <br />
            </div>
        </div>
    </a>
</li>