/*Sarah Agnia Fauziyah
Permainan Tebak Angka dengan Bahasa C*/

#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main() {
    int secretNumber, guess, attempts = 0;
    
    // Seed the random number generator
    srand(time(NULL));
    
    // Generate a random number between 1 and 100
    secretNumber = rand() % 100 + 1;
    printf("~~~~~~~~~~~~~~~~~    SARAH'S GAME   ~~~~~~~~~~~~~~~~~~~~`\n");
    printf("========================================================\n");
    printf("Selamat datang di permainan Tebak Angka!\n");
    printf("Saya telah memilih angka antara 1 dan 100. Coba tebak Ya!\n");
    printf("========================================================\n\n");
    

    //masuk kepermainan atau player mulai memasukan tebakannya
    do {
        printf("Masukkan tebakan Anda: ");
        scanf("%d", &guess);
        
        attempts++;
        
        //memeriksa tebakan player
        if (guess > secretNumber) {
            printf("Angka terlalu besar! Coba lagi.\n");
        } else if (guess < secretNumber) {
            printf("Angka terlalu kecil! Coba lagi.\n");
        } else {
            printf("+++Selamat! Anda menebak angka dengan benar dalam %d percobaan!+++\n", attempts);
        }
    } while (guess != secretNumber);
    
    return 0;
}
