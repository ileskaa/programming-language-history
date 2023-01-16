<pre># Our Duck object
class Duck:
    def swim(self):
        print('Duck swims')

    def quack(self):
        print('Duck quacks')

# Our Dolphin object
class Dolphin:
    def swim(self):
        print('Dolphin swims')

    def whistle(self):
        print('Dolphin whistles')

# Calling both objects
for Duck in Duck(), Dolphin():
    Duck.swim()
    # Duck swims
    # Dolphin swims

    Duck.quack()
    # AttributeError: 'Dolphin' object has no attribute 'quack'
</pre>