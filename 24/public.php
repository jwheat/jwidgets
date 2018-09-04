<?php
    require_once 'websections/JaduPolls.php';

    $currentPoll = getCurrentPoll();
    
    if ($_SESSION['voted' . $currentPoll->id] != null) {
        $noVote = true;
    }
    if ($currentPoll != null) {
?>
    <h2>Opinion poll</h2>
    <p><?php print encodeHtml($currentPoll->question); ?></p>
<?php
        if ($noVote != true) {
?>
    <form name="pollForm" id="pollForm" action="<?php print getSiteRootURL(); ?>/site/scripts/poll_results.php" method="post" class="form">
        <input type="hidden" name="pollID" value="<?php print $currentPoll->id; ?>">
<?php
            $i = 1;
            foreach ($currentPoll->answers as $answer) {
?>
        <label for="pollAnswer<?php print $i; ?>" class="checkbox">
            <input type="radio" id="pollAnswer<?php print $i; ?>" name="answer" value="<?php print $i; ?>"> <?php print encodeHtml($answer); ?>
        </label>
<?php
                $i++;
            }
?>
        <input type="submit" value="Vote now" class="button button__primary">
    </form>
<?php
        }
?>
    <p>Total votes: <?php print $currentPoll->getTotalVotes(); ?> | <a href="<?php print getSiteRootURL() . buildPollResultsURL($currentPoll->id); ?>">Results</a> | <a href="<?php print getSiteRootURL() . buildPastPollResultsURL(); ?>">Past polls</a></p>
<?php
    }
?>