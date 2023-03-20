import tkinter as tk
import configparser
import os

class ChatPage(tk.Frame):
    def __init__(self, master=None):
        super().__init__(master)
        self.master = master
        self.master.title("Chat Page")
        
        # Create widgets
        tk.Label(self, text="Chat").grid(row=0, column=0)
        self.chat_text = tk.Text(self, height=10, width=50)
        self.chat_text.grid(row=1, column=0)
        self.chat_input = tk.Entry(self, width=50)
        self.chat_input.grid(row=2, column=0)
        self.submit_button = tk.Button(self, text="Submit", command=self.submit_chat)
        self.submit_button.grid(row=3, column=0, padx=5, pady=5, sticky="W")
        self.clear_button = tk.Button(self, text="Clear", command=self.clear_chat)
        self.clear_button.grid(row=3, column=0, padx=5, pady=5, sticky="E")
        
    def submit_chat(self):
        chat = self.chat_input.get()
        self.chat_text.insert(tk.END, chat + "\n")
        self.chat_input.delete(0, tk.END)
        
    def clear_chat(self):
        self.chat_text.delete("1.0", tk.END)
        

class SettingsPage(tk.Frame):
    def __init__(self, master=None):
        super().__init__(master)
        self.master = master
        self.master.title("Settings Page")
        
        # Load API key from file
        self.api_key = tk.StringVar()
        config = configparser.ConfigParser()
        if os.path.isfile("ai.ini"):
            config.read("ai.ini")
            if "AI" in config and "api_key" in config["AI"]:
                self.api_key.set(config["AI"]["api_key"])
        
        # Create widgets
        tk.Label(self, text="Settings").grid(row=0, column=0)
        self.api_key_text = tk.Text(self, height=5, width=50)
        self.api_key_text.grid(row=1, column=0)
        self.api_key_text.insert(tk.END, self.api_key.get())
        self.save_button = tk.Button(self, text="Save", command=self.save_settings)
        self.save_button.grid(row=2, column=0, padx=5, pady=5)
        
    def save_settings(self):
        self.api_key.set(self.api_key_text.get("1.0", tk.END).strip())
        config = configparser.ConfigParser()
        config["AI"] = {"api_key": self.api_key.get()}
        with open("ai.ini", "w") as f:
            config.write(f)
        

class Application(tk.Tk):
    def __init__(self):
        super().__init__()
        self.geometry("800x600")
        
        # Create menu
        menubar = tk.Menu(self)
        chat_menu = tk.Menu(menubar, tearoff=0)
        chat_menu.add_command(label="Chat", command=self.show_chat_page)
        chat_menu.add_command(label="Settings", command=self.show_settings_page)
        menubar.add_cascade(label="Menu", menu=chat_menu)
        self.config(menu=menubar)
        
        # Create pages
        self.chat_page = ChatPage(self)
        self.settings_page = SettingsPage(self)
        
        # Show chat page by default
        self.show_chat_page()
        
    def show_chat_page(self):
        self.settings_page.pack_forget()
        self.chat_page.pack(fill="both", expand=True)
        
    def show_settings_page(self):
        self.chat_page.pack_forget()
        self.settings_page.pack(fill="both", expand=True)


if __name__ == "__main__":
    app = Application()
    app.mainloop()