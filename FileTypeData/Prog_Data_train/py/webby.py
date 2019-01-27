import sublime, sublime_plugin
import os
import webbrowser

class WebbyCommand(sublime_plugin.ApplicationCommand):
	def run(self, **kwargs):
		sshcmd="ssh -t root@splashy.kelly.local. \"cd /var/www/splash; /bin/bash -l\""
		os.system("gnome-terminal -e \"%s\"  &"%(sshcmd))
		webbrowser.open("http://www.cnn.com")
