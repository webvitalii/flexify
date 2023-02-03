import tkinter as tk

class Window(tk.Tk):
    def __init__(self, parent):
        self.parent = parent

        parent.title("Simplex GUI")
        parent.geometry("800x600")

        self.label = tk.Label(parent, text="Simplex GUI", font=("Arial", 20))
        self.label.pack(padx=20, pady=20)

        self.textbox = tk.Text(parent, height=3, font=("Arial", 16))
        self.textbox.pack(padx=10, pady=10)

        self.entryBox = tk.Entry(parent)
        self.entryBox.pack()

        self.button = tk.Button(parent, text="Action", font=("Arial", 20), command=self.show_message)
        self.button.pack()

        self.button_quit = tk.Button(parent, text="Quit", font=("Arial", 20), command=parent.quit)
        self.button_quit.pack()

    def show_message(self):
        print("Hello there!")


if __name__ == "__main__":
    window = tk.Tk()
    my_gui = Window(window)
    window.mainloop()

