
// Add templates/page—landing-page.tpl.php to sites/all/themes/base-themes/bento/templates

//enable webforms

// THIS NEEDS TO GO IN template.php for the bento base-theme
// IN function bento_process_page(&$variables)

 if (isset($variables['node']->type)) {
    // If the content type's machine name is "my_machine_name" the file
    // name will be "page--my-machine-name.tpl.php".
    $variables['theme_hook_suggestions'][] = 'page__' . $variables['node']->type;
  }