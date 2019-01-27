from LangPred import Predictor
from sklearn import metrics
import os
import warnings
from pathlib import Path

def warn(*args, **kwargs):
    pass
warnings.warn = warn

extension = {
             "cpp": "C++",
             "py": "Python",
             "java": "Java",
             "php":"php",
             "cs":"cs"
            }

def predict(file):
    # lang in str
    myfile = open(file, encoding='utf-8', mode='r').read()
    lang = Predictor().language(myfile)
    return lang

def suffix(file):
    ext = file.split(".")[-1]
    return ext

print (extension)

lang_true = []
lang_pred = []

# # ==== Training ====
path = 'FileTypeData/Prog_Data_train/' # training dir
predictor = Predictor()
predictor.learn(path)

# # ==== Prediction ====
path = 'FileTypeData/Prog_Data_testing/' # test dir
for root, dirs, files in os.walk(path):
    i = 0
    for file in files:
        i += 1
        print ("Entry:", file)
        # if i > 10:
            # break
        temp_pred = predict(os.path.join(root, file))
        temp_true = suffix(file)
        lang_true.append(temp_true)
        lang_pred.append(temp_pred)
        print ("temp_pred:", temp_pred, "temp_true:", temp_true)

# ==== Prediction output ====
print("Predicted on", str(len(lang_pred)), "files. Results are as follows:")

result = metrics.confusion_matrix(lang_true, lang_pred)
print(result)

report = metrics.classification_report(lang_true, lang_pred)
print(report)

with open("result.txt", "w") as resultfile:
    resultfile.write("Predicted on " + str(len(lang_pred)) + " files. Results are as follows:\n\n")
    resultfile.write("Confusion Matrix:\n")
    for row in result:
        string = ""
        for column in row:
            string += str(column) + "\t"
        resultfile.write(string+"\n")
    resultfile.write("\nClassification Report\n")
    resultfile.write(report)
