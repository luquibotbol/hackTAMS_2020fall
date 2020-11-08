import client

# You'll need to install kivy, there are instruction for this in https://kivy.org/#download
import kivy
from kivy.app import App
from kivy.uix.textinput import TextInput
from kivy.clock import Clock

class chatApp(App):
    
    def send_message(self, instance):
        message = self.inputBox.text
        if not len(message):
                return

        client.send(message)
        self.inputBox.text = ""
        self.textBox.text += "[color=11ab5b]Me > " + message + "[/color]" + "\n"
    
    def receive_message(self, instance):
        message = client.receive()
        if message != None:
            self.textBox.text += message + "\n"

    def build(self):    
        self.inputBox = self.root.ids.input
        self.textBox = self.root.ids.chat_text

        self.submitButton = self.root.ids.submit
        self.submitButton.bind(on_press=self.send_message)

        Clock.schedule_interval(self.receive_message, 1)

        
        
if __name__ == "__main__":    
    chatApp().run()
