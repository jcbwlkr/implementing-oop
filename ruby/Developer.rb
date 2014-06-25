class Developer
    def code
        puts "Bits!"
    end
end

# Some time later

class Developer
    def code
        puts "Hacks!"
    end
end

seth = Developer.new
seth.code # Output: Hacks!
