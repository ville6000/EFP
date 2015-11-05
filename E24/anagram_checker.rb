class AnagramChecker
    def run
        puts "Enter two strings and I'll tell you if they are anagrams"
        puts "Enter the first string: "
        first_string = gets.chomp
        puts "Enter the second string:"
        second_string = gets.chomp

        is_anagram(first_string, second_string)
    end

    def is_anagram(first_string, second_string)
        is_anagram = true
        first = first_string.split(//).sort
        second = second_string.split(//).sort

        first.count.times do |idx|
            is_anagram = false if first[idx] != second[idx]
        end

        is_anagram
    end
end
