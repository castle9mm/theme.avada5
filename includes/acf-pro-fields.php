<?php 
function eccles_theme_field_groups() {
acf_add_local_field_group(array (
  'key' => 'group_56cdf0db5ac8e',
  'title' => 'Directory Single',
  'fields' => array (
    array (
      'key' => 'field_564a5c1579bc3',
      'label' => 'First Name',
      'name' => 'first_name',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'formatting' => 'html',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_564a5c1b79bc4',
      'label' => 'Last Name',
      'name' => 'last_name',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'formatting' => 'html',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_575069a478cb7',
      'label' => 'UNID',
      'name' => 'unid',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => 10,
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_564cf9a3f61a7',
      'label' => 'FAR URL',
      'name' => 'far_url',
      'type' => 'text',
      'instructions' => 'Use this field to insert the Faculty Activity Report url.',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'formatting' => 'html',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_564a19d0f672d',
      'label' => 'Position',
      'name' => 'position',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'formatting' => 'html',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_57236f161e970',
      'label' => 'Office Building',
      'name' => 'office_building',
      'type' => 'select',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'choices' => array (
        'SFEBB' => 'SFEBB',
        'BuC' => 'BuC',
        'CRCC' => 'CRCC',
        'OSH' => 'OSH',
        'PLEC' => 'PLEC',
        'PARK' => 'PARK',
        'FTDG' => '602 Fort Douglas',
        'Monson Center' => 'Thomas S. Monson Center',
        'GARFF' => 'Garff MBA'
      ),
      'default_value' => array (
      ),
      'allow_null' => 1,
      'multiple' => 0,
      'ui' => 0,
      'ajax' => 0,
      'placeholder' => '',
      'disabled' => 0,
      'readonly' => 0,
    ),
    array (
      'key' => 'field_57236f421e971',
      'label' => 'Office Room',
      'name' => 'office_room',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => 24,
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_56b27e01572ab',
      'label' => 'Email',
      'name' => 'email',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'formatting' => 'html',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_56b27e52572ac',
      'label' => 'Phone',
      'name' => 'phone',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'formatting' => 'html',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_564a572973015',
      'label' => 'Short Bio',
      'name' => 'short_bio',
      'type' => 'wysiwyg',
      'instructions' => 'This is the excerpt on the directory landing page.',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'toolbar' => 'full',
      'media_upload' => 1,
      'tabs' => 'all',
    ),
    array (
      'key' => 'field_564a1cdf6d1fd',
      'label' => 'Bio',
      'name' => 'bio',
      'type' => 'wysiwyg',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'toolbar' => 'full',
      'media_upload' => 1,
      'tabs' => 'all',
    ),
    array (
      'key' => 'field_564a19d3f672e',
      'label' => 'Main Image',
      'name' => 'main_image',
      'type' => 'image',
      'instructions' => 'directory image size: 700 wide',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'preview_size' => 'large',
      'library' => 'all',
      'return_format' => 'array',
      'min_width' => 0,
      'min_height' => 0,
      'min_size' => 0,
      'max_width' => 0,
      'max_height' => 0,
      'max_size' => 0,
      'mime_types' => '',
    ),
    array (
      'key' => 'field_564dfd171fb71',
      'label' => 'LinkedIn URL',
      'name' => 'linkedin_url',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'formatting' => 'html',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_564dfd111fb70',
      'label' => 'Twitter URL',
      'name' => 'twitter_url',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'formatting' => 'html',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_564dfd1e1fb72',
      'label' => 'Facebook URL',
      'name' => 'facebook_url',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'formatting' => 'html',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_564dfd241fb73',
      'label' => 'Instagram URL',
      'name' => 'instagram_url',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'formatting' => 'html',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_564dfd2b1fb74',
      'label' => 'YouTube URL',
      'name' => 'youtube_url',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'formatting' => 'html',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_564a25bc0d7a3',
      'label' => 'Full Page or Short?',
      'name' => 'full_page_or_short',
      'type' => 'radio',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'choices' => array (
        'short' => 'Short',
        'full' => 'Full',
      ),
      'other_choice' => 0,
      'save_other_choice' => 0,
      'default_value' => '',
      'layout' => 'horizontal',
      'allow_null' => 0,
    ),
    array (
      'key' => 'field_564a19e4f672f',
      'label' => 'Other Images',
      'name' => 'other_images',
      'type' => 'repeater',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => array (
        array (
          array (
            'field' => 'field_564a25bc0d7a3',
            'operator' => '==',
            'value' => 'full',
          ),
        ),
      ),
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'row_min' => '',
      'row_limit' => '',
      'layout' => 'row',
      'button_label' => 'Add Image',
      'min' => 0,
      'max' => 0,
      'collapsed' => '',
      'sub_fields' => array (
        array (
          'key' => 'field_564a19ebf6730',
          'label' => 'Image',
          'name' => 'image',
          'type' => 'image',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'preview_size' => 'large',
          'library' => 'all',
          'return_format' => 'array',
          'min_width' => 0,
          'min_height' => 0,
          'min_size' => 0,
          'max_width' => 0,
          'max_height' => 0,
          'max_size' => 0,
          'mime_types' => '',
        ),
      ),
    ),
    array (
      'key' => 'field_564a1a12f6732',
      'label' => 'Attribute Sections',
      'name' => 'attribute_sections',
      'type' => 'repeater',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => array (
        array (
          array (
            'field' => 'field_564a25bc0d7a3',
            'operator' => '==',
            'value' => 'full',
          ),
        ),
      ),
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'collapsed' => '',
      'min' => '',
      'max' => '',
      'layout' => 'row',
      'button_label' => 'Add Section',
      'sub_fields' => array (
        array (
          'key' => 'field_564a1a1ef6733',
          'label' => 'Section Title',
          'name' => 'section_title',
          'type' => 'text',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
          'readonly' => 0,
          'disabled' => 0,
        ),
        array (
          'key' => 'field_564a407757802',
          'label' => 'Open or Closed?',
          'name' => 'open_or_closed',
          'type' => 'radio',
          'instructions' => 'Choose whether the section will be open or closed on load.',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'choices' => array (
            'closed' => 'Closed',
            'open' => 'Open',
          ),
          'other_choice' => 0,
          'save_other_choice' => 0,
          'default_value' => '',
          'layout' => 'horizontal',
          'allow_null' => 0,
        ),
        array (
          'key' => 'field_564a1a22f6734',
          'label' => 'Options',
          'name' => 'options',
          'type' => 'radio',
          'instructions' => 'Choose the type of content you would like to display. ',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'choices' => array (
            'text' => 'Text',
            'images' => 'Images',
            'files' => 'Files',
            'redbox' => 'Red Boxes',
            'titlesubtext' => 'Title, Sub-title, Text',
            'include' => 'Areas of Expertise Section',
          ),
          'other_choice' => 0,
          'save_other_choice' => 0,
          'default_value' => 'text',
          'layout' => 'vertical',
          'allow_null' => 0,
        ),
        array (
          'key' => 'field_564a1b41f6735',
          'label' => 'Text',
          'name' => 'text',
          'type' => 'wysiwyg',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => array (
            array (
              array (
                'field' => 'field_564a1a22f6734',
                'operator' => '==',
                'value' => 'text',
              ),
            ),
          ),
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'toolbar' => 'full',
          'media_upload' => 1,
          'tabs' => 'all',
        ),
        array (
          'key' => 'field_564a1b53f6736',
          'label' => 'Images',
          'name' => 'images',
          'type' => 'repeater',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => array (
            array (
              array (
                'field' => 'field_564a1a22f6734',
                'operator' => '==',
                'value' => 'images',
              ),
            ),
          ),
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'row_min' => '',
          'row_limit' => '',
          'layout' => 'row',
          'button_label' => 'Add Image',
          'min' => 0,
          'max' => 0,
          'collapsed' => '',
          'sub_fields' => array (
            array (
              'key' => 'field_564a1b5af6737',
              'label' => 'Image',
              'name' => 'image',
              'type' => 'image',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'preview_size' => 'large',
              'library' => 'all',
              'return_format' => 'array',
              'min_width' => 0,
              'min_height' => 0,
              'min_size' => 0,
              'max_width' => 0,
              'max_height' => 0,
              'max_size' => 0,
              'mime_types' => '',
            ),
            array (
              'key' => 'field_564a1b65f6738',
              'label' => 'Link',
              'name' => 'link',
              'type' => 'text',
              'instructions' => 'Leave blank to remove link.',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html',
              'maxlength' => '',
              'readonly' => 0,
              'disabled' => 0,
            ),
          ),
        ),
        array (
          'key' => 'field_564a1b7df6739',
          'label' => 'Files',
          'name' => 'files',
          'type' => 'repeater',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => array (
            array (
              array (
                'field' => 'field_564a1a22f6734',
                'operator' => '==',
                'value' => 'files',
              ),
            ),
          ),
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'row_min' => '',
          'row_limit' => '',
          'layout' => 'row',
          'button_label' => 'Add File',
          'min' => 0,
          'max' => 0,
          'collapsed' => '',
          'sub_fields' => array (
            array (
              'key' => 'field_564a1b84f673a',
              'label' => 'File',
              'name' => 'file',
              'type' => 'file',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'library' => 'all',
              'return_format' => 'url',
              'min_size' => 0,
              'max_size' => 0,
              'mime_types' => '',
            ),
            array (
              'key' => 'field_564a278eb78d1',
              'label' => 'Cover Image',
              'name' => 'cover_image',
              'type' => 'image',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'preview_size' => 'thumbnail',
              'library' => 'all',
              'return_format' => 'url',
              'min_width' => 0,
              'min_height' => 0,
              'min_size' => 0,
              'max_width' => 0,
              'max_height' => 0,
              'max_size' => 0,
              'mime_types' => '',
            ),
          ),
        ),
        array (
          'key' => 'field_564a1b9df673b',
          'label' => 'Red Boxes',
          'name' => 'red_boxes',
          'type' => 'repeater',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => array (
            array (
              array (
                'field' => 'field_564a1a22f6734',
                'operator' => '==',
                'value' => 'redbox',
              ),
            ),
          ),
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'row_min' => '',
          'row_limit' => '',
          'layout' => 'row',
          'button_label' => 'Add Box',
          'min' => 0,
          'max' => 0,
          'collapsed' => '',
          'sub_fields' => array (
            array (
              'key' => 'field_564a1ba4f673c',
              'label' => 'Text',
              'name' => 'text',
              'type' => 'text',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html',
              'maxlength' => '',
              'readonly' => 0,
              'disabled' => 0,
            ),
          ),
        ),
        array (
          'key' => 'field_564a1bbbf673d',
          'label' => 'Title, Sub-title, Text',
          'name' => 'title_subtitle_text',
          'type' => 'repeater',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => array (
            array (
              array (
                'field' => 'field_564a1a22f6734',
                'operator' => '==',
                'value' => 'titlesubtext',
              ),
            ),
          ),
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'row_min' => '',
          'row_limit' => '',
          'layout' => 'row',
          'button_label' => 'Add Row',
          'min' => 0,
          'max' => 0,
          'collapsed' => '',
          'sub_fields' => array (
            array (
              'key' => 'field_564a1bd8f673e',
              'label' => 'Title',
              'name' => 'title',
              'type' => 'text',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html',
              'maxlength' => '',
              'readonly' => 0,
              'disabled' => 0,
            ),
            array (
              'key' => 'field_564a1bdbf673f',
              'label' => 'Sub-title',
              'name' => 'sub-title',
              'type' => 'text',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'formatting' => 'html',
              'maxlength' => '',
              'readonly' => 0,
              'disabled' => 0,
            ),
            array (
              'key' => 'field_564a1be2f6740',
              'label' => 'Text',
              'name' => 'text',
              'type' => 'wysiwyg',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'toolbar' => 'full',
              'media_upload' => 1,
              'tabs' => 'all',
            ),
          ),
        ),
      ),
    ),
    array (
      'key' => 'field_564a260a0cf50',
      'label' => 'Areas of Expertise',
      'name' => 'areas_of_expertise_short',
      'type' => 'checkbox',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'choices' => array (
        'include' => 'Include Areas of Expertise?',
      ),
      'default_value' => array (
        0 => 'include',
      ),
      'layout' => 'vertical',
      'toggle' => 0,
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'directory',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'seamless',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

}
add_action('acf/init', 'eccles_theme_field_groups');

?>
