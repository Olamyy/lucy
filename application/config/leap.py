def isLeapYear(year):
    if year % 4 == 0 and year % 100 != 0 or year % 400 == 0:
        return True
    return False

 def getMonthDays(month, year):
    months = [31,28,31,30,31,30,31,31,30,31,30,31]
    if isLeapYear(year) == True:
        months[1] = 29
    return months[month - 1]

 def daysBetweenDates(year1, month1, day1, year2, month2, day2):
    totalDays = 0
    totalDays -= (day1 - 1)
    totalDays += (day2 - 1)
    if month1 != 1:
        for a in range(1, month1):
            totalDays -= getMonthDays(a, year1)
    if month2 != 1:
        for a in range(1, month2):
            totalDays += getMonthDays(a, year2)
    if year1 != year2:
        for a in range(year1, year2):
            if isLeapYear(a) == True:
                totalDays += 366
            else:
                totalDays += 365
    return totalDays