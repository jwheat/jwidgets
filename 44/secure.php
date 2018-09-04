<style>
ol {
    list-style:disc;
    list-style-position:inside;
}
textarea {
    width : 450px !important;
}
</style>
<table class="form_table" id="lb_widget_content">
    <tr>
        <td class='label_cell'>Twitter username to display</td>
        <td class='data_cell'>
            <input type='text' size='65' name='twitter_username' id='twitter_username' />
        </td>
    </tr>
    <tr>
      <td class='label_cell'>Instructions</td>
      <td class='data_cell'>
        Twitter controls how their information is displayed on external sites. Due to this restriction, you must follow these instructions to setup twitter feed to display properly on your site.
        <br/><br/>
          <ol id='instructions'>
            <li><a href='https://twitter.com/settings/widgets/new' target='_blank'>Click here to Log into twitter and create a new widget</a></li>
            <li>Choose either the <a href='https://twitter.com/settings/widgets/new/user' target='_blank'>User timeline</a>, or <a href='https://twitter.com/settings/widgets/new/favorites' target='_blank'>Favorites</a> tab</li>
            <li>Complete the form</li>
            <li>When done, click Create widget</li>
            <li>Copy the code in the box on the lower right</li>
          </ol>
      </td>
    </tr>
    <tr>
      <td class="label_cell">Twitter Code Block</td>
      <td class="data_cell">
        <textarea id='twitter_code' name='twitter_code' cols='45' rows='4'></textarea>
      </td>
    </tr>
  </tbody>
</table>