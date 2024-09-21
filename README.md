# wordpress-webhook-plugin.php
This is a plugin test for Wordpress webhooks

# Note
This works to any framework / CMS that uses PHP

# How it Works 
Action Hook
```bash
add_action('save_post', 'save_post_webhook', 10, 3); // save_post is a function created by Wordpress
```
- Hooks into the save_post action, which is triggered whenever a post is saved. You can also use this in any function
- Constructs a message indicating the post ID.
- Defines the URL to which the webhook will be sent.
- Sets up the arguments for the POST request, including the message in the body.
- Sends the POST request to the specified URL using wp_remote_post.

## Description
The Test Plugin adds webhook functionalities to any Wordpress theme. It triggers a webhook whenever a post is saved, sending a message to a specified URL.

## Installation
1. Download the plugin files.
2. Upload the plugin files to the `/wp-content/plugins/wordpress-webhook-plugin/` directory, or install the plugin through the WordPress plugins screen directly.
3. Update the wordpress-webhook-plugin.php and add any webhook triggers I'm using [Zapier](https://zapier.com/) :
```bash
$url = 'Webhook Links';
```
5. Activate the plugin through the 'Plugins' screen in WordPress.
   ![image](https://github.com/user-attachments/assets/4f8bdcde-0753-4048-afe2-4b9a6fd893ea)
6. Filter Your Data
   ![image](https://github.com/user-attachments/assets/24d93016-9009-4f42-a7f9-bd38eae5e1e9)
7. Try it and see if there is data sent <br>
   ![image](https://github.com/user-attachments/assets/19c1436b-9c5e-4e7b-beeb-e56fd1f833c9)


## Usage
Once activated, the plugin will automatically send a webhook to the specified URL whenever a post is saved.

