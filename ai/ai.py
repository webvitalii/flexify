import tkinter as tk

class App(tk.Tk):
    def __init__(self):
        super().__init__()

        # Set the window size
        self.geometry("800x600")

        # Create a menu bar
        menubar = tk.Menu(self)

        # Create a chat menu
        chat_menu = tk.Menu(menubar, tearoff=0)
        chat_menu.add_command(label="Chat", command=self.show_chat_page)
        menubar.add_cascade(label="Chat", menu=chat_menu)

        # Create a settings menu
        settings_menu = tk.Menu(menubar, tearoff=0)
        settings_menu.add_command(label="Settings", command=self.show_settings_page)
        menubar.add_cascade(label="Settings", menu=settings_menu)

        # Add the menu bar to the window
        self.config(menu=menubar)

        # Create the chat page
        self.chat_frame = tk.Frame(self)
        self.chat_frame.pack(fill=tk.BOTH, expand=True)
        self.chat_text = tk.Text(self.chat_frame)
        self.chat_text.pack(fill=tk.BOTH, expand=True)
        self.chat_entry = tk.Entry(self.chat_frame)
        self.chat_entry.pack(side=tk.LEFT, fill=tk.BOTH, expand=True)
        self.chat_submit_button = tk.Button(self.chat_frame, text="Submit", command=self.submit_chat_message)
        self.chat_submit_button.pack(side=tk.LEFT)
        self.chat_clear_button = tk.Button(self.chat_frame, text="Clear", command=self.clear_chat_text)
        self.chat_clear_button.pack(side=tk.LEFT)

        # Create the settings page
        self.settings_frame = tk.Frame(self)
        self.settings_frame.pack(fill=tk.BOTH, expand=True)
        self.settings_textbox = tk.Text(self.settings_frame, height=10)
        self.settings_textbox.pack(side=tk.TOP, fill=tk.BOTH, padx=10)
        self.settings_save_button = tk.Button(self.settings_frame, text="Save", command=self.save_settings)
        self.settings_save_button.pack(side=tk.BOTTOM, pady=10)

        # Show the chat page by default
        self.show_chat_page()

    def show_chat_page(self):
        # Show the chat frame and hide the settings frame
        self.chat_frame.pack(fill=tk.BOTH, expand=True)
        self.settings_frame.pack_forget()

    def show_settings_page(self):
        # Show the settings frame and hide the chat frame
        self.settings_frame.pack(fill=tk.BOTH, expand=True)
        self.chat_frame.pack_forget()

    def submit_chat_message(self):
        # Get the text from the entry box and add it to the chat text box
        message = self.chat_entry.get()
        self.chat_text.insert(tk.END, message + "\n")

        # Clear the entry box
        self.chat_entry.delete(0, tk.END)

    def clear_chat_text(self):
        # Clear the chat text box
        self.chat_text.delete(1.0, tk.END)

    def save_settings(self):
        # Save the contents of the settings textbox
        settings = self.settings_textbox.get("1.0", tk.END)
        # Do something with the settings, e.g. write them to a file
        print("Settings saved:", settings.strip())

if __name__ == "__main__":
    app = App()
    app.mainloop()