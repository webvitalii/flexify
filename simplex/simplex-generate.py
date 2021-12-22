def simplex_self_path():
    import os
    return os.path.dirname(os.path.abspath(__file__))

def simplex_file_list(path = '/'):
    import os
    self_path = simplex_self_path()
    file_list = {}

    for entry in os.scandir(self_path + path):
        if entry.is_file(): # entry.is_dir() for folders
            file_list[entry.name] = entry.path

    return file_list


def simplex_generate():
    template_content = ''
    self_path = simplex_self_path()
    template_path = self_path + '/templates/default.html'
    with open(template_path, 'r') as template_ref:
        template_content = template_ref.read()

    file_list = simplex_file_list(path='\pages')
    print('Files: ')
    print(file_list)

    for file_name, file_path in file_list.items():
        file_content = ''
        output_content = ''

        with open(file_path, 'r') as file_ref:
            file_content = file_ref.read()

        output_content = template_content.replace('%%content%%', file_content)
        with open(self_path + '/../' + file_name, 'w') as output_ref:
            output_ref.write(output_content)


simplex_generate()