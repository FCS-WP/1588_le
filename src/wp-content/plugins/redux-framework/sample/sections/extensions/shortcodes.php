<?php
/**
 * Redux Search Sample config.
 * For full documentation, please visit: http:https://devs.redux.io/
 *
 * @package Redux
 */

defined( 'ABSPATH' ) || exit;

// --> Below this line not needed. This is just for demonstration purposes.
$function = '<strong>' . esc_html__( 'Function', 'your-textdomain-here' ) . ': </strong>';
$example  = esc_html__( 'Example output:', 'your-textdomain-here' ) . ' ';

Redux::set_section(
	$opt_name,
	array(
		'customizer' => false,
		'title'      => esc_html__( 'Shortcodes', 'your-textdomain-here' ),
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'your-textdomain-here' ) . '<a href="https://devs.redux.io/core-extensions/shortcodes.html" target="_blank">https://devs.redux.io/extensions/shortcodes.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'         => 'sc-bloginfo',
				'title'      => esc_html__( '[bloginfo data="name"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>get_bloginfo("name")</code>',
				'desc'       => esc_html__( 'Displays the "Site Title" set in Settings > General. This data is retrieved from the "blogname" record in the wp_options table.', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[bloginfo data="name"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-description',
				'title'      => esc_html__( '[bloginfo data="description"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>get_bloginfo("description")</code>',
				'desc'       => esc_html__( 'Displays the "Tagline" set in Settings > General. This data is retrieved from the "blogdescription" record in the wp_options table.', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[bloginfo data="description"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-wpurl',
				'title'      => esc_html__( '[bloginfo data="wpurl"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>get_bloginfo("wpurl")</code>',
				'desc'       => esc_html__( 'Displays the "WordPress address (URL)" set in Settings > General. This data is retrieved from the "siteurl" record in the wp_options table. Consider using *root_url* instead, especially for multi-site configurations using paths instead of subdomains (it will return the root site not the current sub-site).', 'your-textdomain-here' ),
				'type'       => 'raw',
				'markdown'   => true,
				'content'    => $example . do_shortcode( '<strong>[bloginfo data="wpurl"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-rooturl',
				'title'      => esc_html__( '[bloginfo data="root_url"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>site_url()</code>',
				'desc'       => esc_html__( 'Return the root site, not the current sub-site.', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[bloginfo data="root_url"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-url',
				'title'      => esc_html__( '[bloginfo data="url"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>home_url()</code>',
				'desc'       => esc_html__( 'Displays the "Site address (URL)" set in Settings > General. This data is retrieved from the "home" record in the wp_options table.', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[bloginfo data="url"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-adminemail',
				'title'      => esc_html__( '[bloginfo data="admin_email"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>get_bloginfo("admin_email")</code>',
				'desc'       => esc_html__( 'Displays the "E-mail address" set in Settings > General. This data is retrieved from the "admin_email" record in the wp_options table.', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[bloginfo data="admin_email"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-charset',
				'title'      => esc_html__( '[bloginfo data="charset"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>get_bloginfo("charset")</code>',
				'desc'       => esc_html__( 'Displays the "Encoding for pages and feeds" set in Settings > Reading. This data is retrieved from the "blog_charset" record in the wp_options.', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[bloginfo data="charset"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-version',
				'title'      => esc_html__( '[bloginfo data="version"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>get_bloginfo("version")</code>',
				'desc'       => esc_html__( 'Displays the WordPress Version you use. This data is retrieved from the $wp_version variable set in wp-includes/version.php.', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[bloginfo data="version"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-htmltype',
				'title'      => esc_html__( '[bloginfo data="html_type"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>get_bloginfo("html_type")</code>',
				'desc'       => esc_html__( 'Displays the Content-Type of WordPress HTML pages (default: "text/html"). This data is retrieved from the "html_type" record in the wp_options table. Themes and plugins can override the default value using the pre_option_html_type filter.', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[bloginfo data="html_type"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-multi',
				'title'      => esc_html__( '[bloginfo data="is_multisite"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>is_multisite()</code>',
				'desc'       => esc_html__( 'Displays true/false check if WordPress is running in multisite mode.', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . ( do_shortcode( '<strong>[bloginfo data="is_multisite"]</strong>' ) ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-rtl',
				'title'      => esc_html__( '[bloginfo data="text_direction"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>is_rtl()</code>',
				'desc'       => esc_html__( 'Displays true/false check if the Text Direction of WordPress HTML pages is left instead of right.', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . ( do_shortcode( '<strong>[bloginfo data="text_direction"]</strong>' ) ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-lang',
				'title'      => esc_html__( '[bloginfo data="language"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>get_bloginfo("language")</code>',
				'desc'       => esc_html__( 'Displays the language of WordPress.', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[bloginfo data="language"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-stylesheet-url',
				'title'      => esc_html__( '[bloginfo data="stylesheet_url"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>get_stylesheet_uri()</code>',
				'desc'       => esc_html__( 'Displays the primary CSS (usually style.css) file URL of the active theme.', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[bloginfo data="stylesheet_url"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-stylesheet-dir',
				'title'      => esc_html__( '[bloginfo data="stylesheet_directory"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>get_stylesheet_directory()</code>',
				'desc'       => esc_html__( 'Displays the stylesheet directory of the active theme.', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[bloginfo data="stylesheet_directory"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-template-url',
				'title'      => esc_html__( '[bloginfo data="template_url"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>get_template_directory_uri()</code>',
				'desc'       => esc_html__( 'Displays the "Site Title" set in Settings > General. This data is retrieved from the "blogname" record in the wp_options table.', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[bloginfo data="template_url"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-child-template-url',
				'title'      => esc_html__( '[bloginfo data="child_template_url"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>get_stylesheet_directory_uri()</code>',
				'desc'       => esc_html__( 'Child template URI.', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[bloginfo data="child_template_url"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-template-dir',
				'title'      => esc_html__( '[bloginfo data="template_directory"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>get_template_directory()</code>',
				'desc'       => esc_html__( 'Template directory.', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[bloginfo data="template_directory"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-child-template-dir',
				'title'      => esc_html__( '[bloginfo data="child_template_directory"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>get_stylesheet_directory()</code>',
				'desc'       => esc_html__( 'Child template Directory.', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[bloginfo data="child_template_directory"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-pingback-url',
				'title'      => esc_html__( '[bloginfo data="pingback_url"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>get_bloginfo("pingback_url")</code>',
				'desc'       => esc_html__( 'Displays the Pingback XML-RPC file URL (xmlrpc.php).', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[bloginfo data="pingback_url"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-atom-url',
				'title'      => esc_html__( '[bloginfo data="atom_url"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>get_bloginfo("atom_url")</code>',
				'desc'       => esc_html__( 'Displays the Atom feed URL (/feed/atom).', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[bloginfo data="atom_url"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-rdf-url',
				'title'      => esc_html__( '[bloginfo data="rdf_url"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>get_bloginfo("rdf_url")</code>',
				'desc'       => esc_html__( 'Displays the RDF/RSS 1.0 feed URL (/feed/rfd).', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[bloginfo data="rdf_url"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-rss-url',
				'title'      => esc_html__( '[bloginfo data="rss_url"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>get_bloginfo("rss_url")</code>',
				'desc'       => esc_html__( 'Displays the RSS 0.92 feed URL (/feed/rss).', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[bloginfo data="rss_url"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-rss2-url',
				'title'      => esc_html__( '[bloginfo data="rss2_url"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>get_bloginfo("rss2_url")</code>',
				'desc'       => esc_html__( 'Displays the RSS 2.0 feed URL (/feed).', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[bloginfo data="rss2_url"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-comments-atom-url',
				'title'      => esc_html__( '[bloginfo data="comments_atom_url"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>get_bloginfo("comments_atom_url")</code>',
				'desc'       => esc_html__( 'Displays the comments Atom feed URL (/comments/feed).', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[bloginfo data="comments_atom_url"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-comments-rss2-url',
				'title'      => esc_html__( '[bloginfo data="comments_rss2_url"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>get_bloginfo("comments_rss2_url")</code>',
				'desc'       => esc_html__( 'Displays the comments RSS 2.0 feed URL (/comments/feed).', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[bloginfo data="comments_rss2_url"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-login-url',
				'title'      => esc_html__( '[bloginfo data="login_url"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>wp_login_url()</code>',
				'desc'       => esc_html__( 'Returns the WordPress login URL.', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[bloginfo data="login_url"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-logout-url',
				'title'      => esc_html__( '[bloginfo data="logout_url"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>wp_logout_url()</code>',
				'desc'       => esc_html__( 'Returns the WordPress logout URL.', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[bloginfo data="logout_url"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-register-url',
				'title'      => esc_html__( '[bloginfo data="register_url"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>wp_registration_url()</code>',
				'desc'       => esc_html__( 'Returns the WordPress register URL.', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[bloginfo data="register_url"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-lost-pw-url',
				'title'      => esc_html__( '[bloginfo data="lost_password_url"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>wp_lostpassword_url()</code>',
				'desc'       => esc_html__( 'Returns the WordPress lost password URL.', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[bloginfo data="lost_password_url"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'   => 'opt-divide-1',
				'type' => 'divide',
			),
			array(
				'id'         => 'sc-date',
				'title'      => esc_html__( '[date data="Y"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>date("Y")</code>',
				// translators: %1$s: PHP Date Format URL.
				'desc'       => sprintf( esc_html__( 'Returns the current year.  Any date format characters as specified by the %1$s may be used.', 'your-textdomain-here' ), '<a href="http://php.net/manual/en/function.date.php" target="_blank">' . esc_html__( 'PHP Date Format Table', 'your-textdomain-here' ) . '</a>' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[date data="Y"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'   => 'opt-divide-2',
				'type' => 'divide',
			),
			array(
				'id'         => 'sc-theme-name',
				'title'      => esc_html__( '[themeinfo data="name"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>$theme_info->get("Name")</code>',
				'desc'       => esc_html__( 'Theme name as given in theme\'s style.css.', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[themeinfo data="name"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-theme-uri',
				'title'      => esc_html__( '[themeinfo data="theme_uri"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>$theme_info->get("ThemeURI")</code>',
				'desc'       => esc_html__( 'The URL to the theme\'s directory.', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[themeinfo data="theme_uri"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-theme-desc',
				'title'      => esc_html__( '[themeinfo data="description"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>$theme_info->get("Description")</code>',
				'desc'       => esc_html__( 'The description of the theme.', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[themeinfo data="description"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-theme-author',
				'title'      => esc_html__( '[themeinfo data="author"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>$theme_info->get("Author")</code>',
				'desc'       => esc_html__( 'The theme\'s author.', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[themeinfo data="author"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-theme-author-uri',
				'title'      => esc_html__( '[themeinfo data="author_uri"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>$theme_info->get("AuthorURI")</code>',
				'desc'       => esc_html__( 'The website of the theme author.', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[themeinfo data="author_uri"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-theme-version',
				'title'      => esc_html__( '[themeinfo data="version"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>$theme_info->get("Version")</code>',
				'desc'       => esc_html__( 'The version of the theme.', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[themeinfo data="version"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-theme-template',
				'title'      => esc_html__( '[themeinfo data="template"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>$theme_info->get("Template")</code>',
				'desc'       => esc_html__( 'The folder name of the current theme.', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[themeinfo data="template"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-theme-status',
				'title'      => esc_html__( '[themeinfo data="status"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>$theme_info->get("Status")</code>',
				'desc'       => esc_html__( 'If the theme is published.', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[themeinfo data="status"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-theme-tags',
				'title'      => esc_html__( '[themeinfo data="tags"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>$theme_info->get("Tags")</code>',
				'desc'       => esc_html__( 'Tags used to describe the theme.', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[themeinfo data="tags"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-theme-text-domain',
				'title'      => esc_html__( '[themeinfo data="text_domain"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>$theme_info->get("TextDomain")</code>',
				'desc'       => esc_html__( 'The text domain used in the theme for translation purposes.', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[themeinfo data="text_domain"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-theme-domain-path',
				'title'      => esc_html__( '[themeinfo data="domain_path"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>$theme_info->get("DomainPath")</code>',
				'desc'       => esc_html__( 'Path to the theme translation files.', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[themeinfo data="domain_path"]</strong>' ),
				'full_width' => false,
			),
			array(
				'id'         => 'sc-theme-is-child',
				'title'      => esc_html__( '[themeinfo data="is_child"]', 'your-textdomain-here' ),
				'subtitle'   => $function . '<code>is_child_theme()</code>',
				'desc'       => esc_html__( 'True/False return for child theme active check (Blank indicates False).', 'your-textdomain-here' ),
				'type'       => 'raw',
				'content'    => $example . do_shortcode( '<strong>[themeinfo data="is_child"]</strong>' ),
				'full_width' => false,
			),

		),
	)
);
