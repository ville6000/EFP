require "./anagram_checker"

RSpec.describe AnagramChecker, "#is_anagram" do
    it "checks if strings 'note' and 'tone' are anagrams" do
        anagram_checker = AnagramChecker.new
        expect(anagram_checker.is_anagram('note', 'tone')).to be true
    end

    it "checks if strings 'pies' and 'fork' are anagrams" do
        anagram_checker = AnagramChecker.new
        expect(anagram_checker.is_anagram('pies', 'fork')).to be false
    end

    it "checks if different length strings 'friends' and 'traitors' are anagrams" do
        anagram_checker = AnagramChecker.new
        expect(anagram_checker.is_anagram('friends', 'traitors')).to be false
    end

    it "checks if strings 'friend' and 'finder' are anagrams" do
        anagram_checker = AnagramChecker.new
        expect(anagram_checker.is_anagram('friend', 'finder')).to be true
    end
end
