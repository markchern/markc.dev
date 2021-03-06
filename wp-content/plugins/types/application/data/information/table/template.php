<?php
return array(
	/* No Views, No Layouts, Single Missing */
	'single-missing' => array(
		'type' => 'template',

		'priority' => 'important',

		'conditions'=> array(
			'Types_Helper_Condition_Layouts_Missing',
			'Types_Helper_Condition_Views_Missing',
			'Types_Helper_Condition_Single_Missing'
		),

		'description' => array(
			array(
				'type' => 'paragraph',
				'content' => __( 'Your theme doesn’t have a template to display %POST-LABEL-PLURAL%.', 'types' )
			),
			array(
				'type'   => 'link',
				'external' => true,
				'label'  => __( 'Visit example %POST-LABEL-SINGULAR%', 'types' ),
				'target' => '%POST-PERMALINK%'
			),
			array(
				'type'   => 'dialog',
				'class'  => 'button-primary types-button',
				'label'  => __( 'Resolve', 'types' ),
				'dialog' => array(
					'id' => 'resolve-single-no-template',
					'description' => array(
						array(
							'type' => 'paragraph',
							'content' => __( 'Toolset plugins let you design templates for single items (%POST-LABEL-SINGULAR% pages) without
                        writing PHP. Your templates will include all the fields that you need and your design.', 'types' )
						),
						array(
							'type'   => 'link',
							'class'  => 'button-primary types-button',
							'external' => true,
							'label'  => __( 'Learn about creating templates with Toolset', 'types' ),
							'target' => Types_Helper_Url::get_url( 'creating-templates-with-toolset', 'popup' ),
						),
						array(
							'type' => 'paragraph',
							'content' => __( 'Or...', 'types' )
						),
						array(
							'type' => 'link',
							'external' => true,
							'label' => __( 'Instructions to create a single-%POST-TYPE-NAME%.php in PHP', 'types' ),
							'target'  => Types_Helper_Url::get_url( 'creating-templates-with-php', 'popup' )
						),
					)
				)
			)
		),
	),

	/* No Views, No Layouts, Single, without Fields */
	'single-fields-missing' => array(
		'type' => 'template',

		'priority' => 'important',

		'conditions'=> array(
			'Types_Helper_Condition_Layouts_Missing',
			'Types_Helper_Condition_Views_Missing',
			'Types_Helper_Condition_Single_No_Fields',
		),

		'description' => array(
			array(
				'type' => 'paragraph',
				'content' => __( 'Your theme’s template file for displaying %POST-LABEL-SINGULAR% items is missing custom fields.', 'types' )
			),
			array(
				'type'   => 'link',
				'external' => true,
				'label'  => __( 'Visit example %POST-LABEL-SINGULAR%', 'types' ),
				'target' => '%POST-PERMALINK%'
			),
			array(
				'type'   => 'dialog',
				'class'  => 'button-primary types-button',
				'label'  => __( 'Resolve', 'types' ),
				'dialog' => array(
					'id' => 'resolve-single-no-fields',
					'description' => array(
						array(
							'type' => 'paragraph',
							'content' => __( 'Toolset plugins let you design templates for single items (%POST-LABEL-SINGULAR% pages),
                    with all the fields that you need to display.', 'types' )
						),
						array(
							'type'   => 'link',
							'class'  => 'button-primary types-button',
							'external' => true,
							'label'  => __( 'Learn about creating templates with Toolset', 'types' ),
							'target' => Types_Helper_Url::get_url( 'creating-templates-with-toolset', 'popup' ),
						),
						array(
							'type' => 'paragraph',
							'content' => __( 'Or...', 'types' )
						),
						array(
							'type' => 'link',
							'external' => true,
							'label' => __( 'Instructions for adding custom fields to single-%POST-TYPE-NAME%.php in PHP', 'types' ),
							'target'  => Types_Helper_Url::get_url( 'adding-custom-fields-with-php', 'popup' )
						),
					)
				)
			)
		),
	),

	/* No Views, No Layouts, Single with Fields */
	'single-fields' => array(
		'type' => 'template',

		'conditions'=> array(
			'Types_Helper_Condition_Layouts_Missing',
			'Types_Helper_Condition_Views_Missing',
			'Types_Helper_Condition_Single_Has_Fields',
		),

		'description' => array(
			array(
				'type' => 'paragraph',
				'content' => __( 'Your theme displays single %POST-LABEL-SINGULAR% pages using the template file: %POST-TEMPLATE-FILE%', 'types' )
			),
			array(
				'type'   => 'link',
				'external' => true,
				'label'  => __( 'Visit example %POST-LABEL-SINGULAR%', 'types' ),
				'target' => '%POST-PERMALINK%'
			),
		),
	),

	/* Views, template missing */
	'views-template-missing' => array(
		'type' => 'template',

		'priority' => 'important',

		'conditions'=> array(
			'Types_Helper_Condition_Layouts_Missing',
			'Types_Helper_Condition_Views_Template_Missing'
		),

		'description' => array(
			array(
				'type' => 'paragraph',
				'content' => __( 'There is no Content Template for %POST-LABEL-SINGULAR% items.', 'types' )
			),
			array(
				'type'   => 'link',
				'external' => true,
				'label'  => __( 'Visit example %POST-LABEL-SINGULAR%', 'types' ),
				'target' => '%POST-PERMALINK%'
			),
			array(
				'type'   => 'link',
				'class'  => 'button-primary types-button',
				'target' => '%POST-CREATE-CONTENT-TEMPLATE%',
				'label'  => __( 'Create Content Template', 'types' )
			)
		),

	),

	/* Views, template */
	'views-template' => array(
		'type' => 'template',

		'conditions'=> array(
			'Types_Helper_Condition_Layouts_Missing',
			'Types_Helper_Condition_Views_Template_Exists'
		),

		'description' => array(
			array(
				'type' => 'paragraph',
				'content' => __( 'The Content Template for %POST-LABEL-PLURAL% is "%POST-CONTENT-TEMPLATE-NAME%"', 'types' )
			),
			array(
				'type'   => 'link',
				'external' => true,
				'label'  => __( 'Visit example %POST-LABEL-SINGULAR%', 'types' ),
				'target' => '%POST-PERMALINK%'
			),
			array(
				'type' => 'link',
				'class' => 'button',
				'label' => __( 'Edit Content Template', 'types' ),
				'target'  => '%POST-EDIT-CONTENT-TEMPLATE%'
			),
		),

	),

	/* Layouts, template missing*/
	'layouts-template-missing' => array(
		'type' => 'template',

		'priority' => 'important',

		'conditions'=> array(
			'Types_Helper_Condition_Layouts_Active',
			'Types_Helper_Condition_Layouts_Template_Missing'
		),

		'description' => array(
			array(
				'type' => 'paragraph',
				'content' => __( 'There is no template layout for %POST-LABEL-SINGULAR% items.', 'types' )
			),
			array(
				'type'   => 'link',
				'external' => true,
				'label'  => __( 'Visit example %POST-LABEL-SINGULAR%', 'types' ),
				'target' => '%POST-PERMALINK%'
			),
			array(
				'type'   => 'link',
				'class'  => 'button-primary types-button',
				'label'  => __( 'Create template', 'types' ),
				'target' => '%POST-CREATE-LAYOUT-TEMPLATE%',
			)
		),
	),

	/* Layouts, template */
	'layouts-template' => array(
		'type' => 'template',

		'conditions'=> array(
			'Types_Helper_Condition_Layouts_Active',
			'Types_Helper_Condition_Layouts_Template_Exists'
		),

		'description' => array(
			array(
				'type' => 'paragraph',
				'content' => __( 'The template layout for %POST-LABEL-SINGULAR% items is "%POST-LAYOUT-TEMPLATE%".', 'types' )
			),
			array(
				'type'   => 'link',
				'external' => true,
				'label'  => __( 'Visit example %POST-LABEL-SINGULAR%', 'types' ),
				'target' => '%POST-PERMALINK%'
			),
			array(
				'type' => 'link',
				'class' => 'button',
				'label' => __( 'Edit template', 'types' ),
				'target'  => '%POST-EDIT-LAYOUT-TEMPLATE%'
			),
		),
	),
);