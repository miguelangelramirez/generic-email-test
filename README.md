# Generic Email Signup Plugin
Generic Corp is interested in capturing email addresses on their Wordpress sites and wants you and your team to build a plugin that allows content creators to pepper their posts with email signup widgets.

## Requirements:
- A content creator must be able to add a shortcode to any public facing page or post.
- This shortcode must have an input box, submit button, and checkbox designating whether or not a user wants to sign up for a secondary newsletter.
- Upon submit, the widget must use an ajax call and post a JSON object to the Wordpress backend.
- On the backend, the emails and options will be saved to a new database table.
- Once the email has been submitted, the widget should show a confirmation message or error message.
- Add svg logo before the form and change the color of it. 

## Your task:
Your team begins work on the plugin.  Your co-worker starts by creating the backend of the plugin.  He's going on vacation and asked you to help finish the plugin.  The current state of the plugin is as follows:
- The function and hook that registers the shortcode has been completed. Use `[ generic-email ]`
- The database table has been created.
- The AJAX endpoint has been created. The ajaxurl and template has been added to the template.  Please POST the payload to this endpoint.

Feel free to contact us with any questions.    

Please fork the repository, complete the tasks, and push the changes to your fork.  When you complete the challenge, please send us a link to the project's repository.  Feel free to change repository hosts to one of your own choosing if you are more comfortable with a different host.  If you'd like to keep the repository private, gitlab.io and bitbucket.com offer free private repositories.  Create a private repo and invite plee@prh.com and rdeshon@prh.com to the repo. 
Complete as much of the plugin as you can in **2 hours**.  You will **not** be penalized if you can not finish in time.  

Note: The files contained in this repository are for the plugin **only**.  In order to test the plugin, you must install wordpress on your local environment and then install this plugin.  Use the included shortcode on a page to test functionality.
