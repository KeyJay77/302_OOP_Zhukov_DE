import createVector from '../src/Vector';

describe('createVector', () => {
    let vec1, vec2, vec3;

    beforeAll(() => {
        vec1 = new createVector(0,0,0);
        vec2 = new createVector(1,4,-8);
        vec3 = new createVector(3,-2,6);
    });

    test('getLength()', () => {
        expect(vec1.getLength()).toBe(0);
        expect(vec2.getLength()).toBe(9);
        expect(vec3.getLength()).toBe(7);
        expect(new createVector(0, 1, 0).getLength()).toBe(1);
    });

    test('add()', () => {
        expect(vec2.add(vec3).toString()).toBe('(4;2;-2)');
    });

    test('sub()', () => {
        expect(vec2.sub(vec3).toString()).toBe('(-2;6;-14)');
        expect(vec3.sub(vec2).toString()).toBe('(2;-6;14)');
        expect(vec2.sub(vec2).toString()).toBe('(0;0;0)');
        expect(vec2.sub(vec1).toString()).toBe(vec2.toString());
    });

    test('product()', () => {
        let n = 4;
        expect(vec2.product(n).toString()).toBe('(4;16;-32)');
        n = -4;
        expect(vec2.product(n).toString()).toBe('(-4;-16;32)');
        n = 0;
        expect(vec2.product(n).toString()).toBe('(0;0;0)');
    });

    test('scalarProduct()', () => {
        expect(vec2.scalarProduct(vec3).toString()).toBe('-53');
        expect(vec3.scalarProduct(vec2).toString()).toBe('-53');
    });

    test('vectorProduct()', () => {
        expect(vec2.vectorProduct(vec3).toString()).toBe('(8;30;-14)');
        expect(vec3.vectorProduct(vec2).toString()).toBe('(-8;-30;14)');
    });

    test('toString()', () => {
        expect(vec2.toString()).toBe('(1;4;-8)');
    });
});