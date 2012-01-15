<?php
// $Id: profile-listing.tpl.php,v 1.7 2009/08/06 05:05:59 webchick Exp $

/**
 * @file
 * Default theme implementation for displaying a user and their profile data
 * for member listing pages.
 *
 * @see profile-wrapper.tpl.php
 *      where all the data is collected and printed out.
 *
 * Available variables:
 * - $account: User's account object.
 * - $user_picture: Image configured for the account linking to the users page.
 * - $name: User's account name linking to the users page.
 * - $profile: Keyed array of all profile fields that are set as visible
 *   in member list pages (configured by site administrators). It also needs
 *   to have a value in order to be present.
 *
 * Each $field in $profile contains:
 * - $field->title: Title of the profile field.
 * - $field->value: Value of the profile field.
 * - $field->type: Type of the profile field, i.e., checkbox, textfield,
 *   textarea, selection, list, url or date.
 *
 * Since $profile is keyed, a direct print of the field is possible. Not
 * all accounts may have a value for a profile so do a check first. If a field
 * of "last_name" was set for the site, the following can be used.
 *
 *  <?php if (isset($profile['last_name'])): ?>
 *    <div class="field last-name">
 *      <?php print $profile['last_name']->title; ?>:<br />
 *      <?php print $profile['last_name']->value; ?>
 *    </div>
 *  <?php endif; ?>
 *
 * @see template_preprocess_profile_listing()
 */

?>


<div class="profile"<?php print $attributes; ?>>

  <?php print render($user_profile['user_picture']); ?>
  <?php $field_name_content = render($user_profile['field_name'][0]); ?>

  <?php //Render Team Role
    $field_position_content = "";
    if(isset($user_profile['field_team_role']))
    {
      $field_position_content = '&nbsp;(';
      $count = 0;
      while(isset($user_profile['field_team_role'][$count]))
      {
        if(isset($user_profile['field_team_role'][$count]))
        {
          $field_position_content .= render($user_profile['field_team_role'][$count]);
          if(isset($user_profile['field_team_role'][$count+1]))
          {
            $field_position_content .= ",&nbsp;";
          }
          $count++;
        }
      }
      $field_position_content .= ')';
    }
  ?>

  <?php

    //Render Name and Position
    print "<div class=\"field field-name-field-name field-type-text field-label-above\"><h3 class=\"field-label\">Name&nbsp;</h3><div class=\"field-items\"><div class=\"field-item even\">{$field_name_content}&nbsp;{$field_position_content}</div></div></div>";

   //Render Favorite Series
   print render($user_profile['field_series']);

   //Render Interests
   print render($user_profile['field_interests']);

   //Render Summary
   print render($user_profile['summary']);

  ?>

</div>

