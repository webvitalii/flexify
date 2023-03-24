import tkinter as tk
from configparser import ConfigParser
import openai

class App(tk.Tk):
    def __init__(self):
        super().__init__()
        self.title('AI')
        self.geometry('800x600')
        self.iconbitmap('ai.ico')

        # Create the menu
        self.menu = tk.Menu(self)
        self.config(menu=self.menu)

        self.chat_menu = tk.Menu(self.menu)
        self.menu.add_cascade(label='Chat', command=self.show_chat_page)

        self.settings_menu = tk.Menu(self.menu)
        self.menu.add_cascade(label='Settings', command=self.show_settings_page)

        # Create Chat and Settings pages
        self.chat_page = ChatPage(self)
        self.settings_page = SettingsPage(self)

        # Show Chat page by default
        self.show_chat_page()

    def show_chat_page(self):
        self.settings_page.grid_remove()
        self.chat_page.grid(sticky='nsew')

    def show_settings_page(self):
        self.chat_page.grid_remove()
        self.settings_page.load_api_key()
        self.settings_page.grid(sticky='nsew')

class ChatPage(tk.Frame):
    def __init__(self, master):
        super().__init__(master)

        self.api_key = ''
        self.config_filename = 'ai.ini'
        self.load_api_key()

        # Configure grid
        self.columnconfigure(0, weight=1)
        self.rowconfigure(0, weight=1)

        # Create output Text() widget with scrollbar
        self.output = tk.Text(self, wrap='word')
        self.output.grid(row=0, column=0, columnspan=2, sticky='nsew')

        self.scrollbar = tk.Scrollbar(self, command=self.output.yview)
        self.scrollbar.grid(row=0, column=2, sticky='ns')
        self.output.config(yscrollcommand=self.scrollbar.set)

        # Create input Entry() widget
        self.input = tk.Entry(self)
        self.input.grid(row=1, column=0, columnspan=2, sticky='ew')

        # Create buttons
        self.submit_button = tk.Button(self, text='Submit', command=self.request_to_ai)
        self.submit_button.grid(row=2, column=0, sticky='ew')

        self.clear_button = tk.Button(self, text='Clear', command=self.clear_text)
        self.clear_button.grid(row=2, column=1, sticky='ew')

    def request_to_ai(self):
        if self.input.get():
            if self.api_key:
                openai.api_key = self.api_key
                # Create instance
                openai.Model.list()
                # Query / Response
                response = openai.Completion.create(
                    model = "text-davinci-003",
                    prompt = self.input.get(),
                    max_tokens=50,
                    temperature=0
                )
                self.output.insert(tk.END, "\n\n")
                self.output.insert(tk.END, response['choices'][0]['text'].strip())
                self.output.insert(tk.END, "\n\n")
                # self.output.insert(tk.END, response)
                self.output.insert(tk.END, "\n\n")
            else:
                self.output.insert(tk.END, "\n\nAPI key is empty!\n\n")
        else:
            self.output.insert(tk.END, "\n\nThe text is empty!\n\n")

    def clear_text(self):
        self.output.delete(1.0, tk.END)
    
    def load_api_key(self):
        config = ConfigParser()
        config.read(self.config_filename)

        if config.has_option('api', 'api_key'):
            self.api_key = config.get('api', 'api_key')

class SettingsPage(tk.Frame):
    def __init__(self, master):
        super().__init__(master)

        # Configure grid
        self.columnconfigure(0, weight=1)
        self.rowconfigure(0, weight=1)

        # Create api_key Text() widget
        self.api_key = tk.Text(self, wrap='word', height=6)
        self.api_key.grid(row=0, column=0, sticky='nsew')

        # Create Save button
        self.save_button = tk.Button(self, text='Save', command=self.save_api_key)
        self.save_button.grid(row=1, column=0, sticky='ew')

        self.config_filename = 'ai.ini'

    def load_api_key(self):
        config = ConfigParser()
        config.read(self.config_filename)

        if config.has_option('api', 'api_key'):
            api_key = config.get('api', 'api_key')
            self.api_key.delete(1.0, tk.END)
            self.api_key.insert(tk.END, api_key)

    def save_api_key(self):
        api_key = self.api_key.get(1.0, tk.END).strip()
        config = ConfigParser()
        config.read(self.config_filename)

        if not config.has_section('api'):
            config.add_section('api')

        config.set('api', 'api_key', api_key)

        with open(self.config_filename, 'w') as config_file:
            config.write(config_file)

if __name__ == '__main__':
    app = App()
    app.mainloop()
